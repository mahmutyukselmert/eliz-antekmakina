am5.ready(function () {
    // Global değişkenler
    let root;
    let chart;
    let polygonSeries;
    let pointSeries;
    let allData; // JSON verisini tutacak
    let currentState = {
        level: "regions", // 'regions', 'countries', 'projects'
        selectedRegion: null,
        selectedCountry: null,
    };

    // amCharts'ın kök elemanını oluşturma
    root = am5.Root.new("chartdiv");

    root.container.set(
        "background",
        am5.Rectangle.new(root, {
            fill: am5.color(0x23303e),
        })
    );

    // Temaları ayarlama
    root.setThemes([am5themes_Animated.new(root)]);

    // Harita grafiğini oluşturma
    chart = root.container.children.push(
        am5map.MapChart.new(root, {
            panX: "translateX",
            panY: "translateY",
            projection: am5map.geoMercator(),
            minZoomLevel: 1, // Başlangıçta daha geniş bir görünüm için min zoom ayarı
        })
    );

    var zoomControl = chart.set("zoomControl", am5map.ZoomControl.new(root, {}));
    zoomControl.homeButton.set("visible", true);

    // Ülkeler için poligon serisini oluşturma
    polygonSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"],
            geodataNames: am5geodata_lang_TR,
        })
    );

    polygonSeries.mapPolygons.template.setAll({
        fill: am5.color(0x7d8f8c), // Koyu gri kara parçaları
        stroke: am5.color(0x7d8f8c), // Sınır çizgileri
    });

    // Marker'lar için nokta serisini oluşturma
    pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

    pointSeries.bullets.push(function () {
        const container = am5.Container.new(root, {
            width: 20,
            height: 20,
            centerX: am5.p50,
            centerY: am5.p50,
            cursorOverStyle: "pointer",
        });

        // Dıştaki halka
        const outerCircle = container.children.push(
            am5.Circle.new(root, {
                radius: 10,
                fill: am5.color(0xffffff), // beyaz renk
                fillOpacity: 0, // tamamen transparan
                stroke: am5.color(0xffffff), // beyaz çizgi
                strokeWidth: 1,
            })
        );

        // İçteki küçük nokta
        const innerCircle = container.children.push(
            am5.Circle.new(root, {
                radius: 5,
                fill: am5.color(0x1a383b), // CSS’deki koyu renk
                strokeWidth: 0,
            })
        );

        // Hover efekti (isteğe bağlı büyüme)
        container.states.create("hover", {
            scale: 1.2,
        });

        // Tıklama olayı
        container.events.on("click", function (ev) {
            const project = ev.target.dataItem.dataContext;
            if (project && project.link) {
                handleBulletClick(project);
            }
        });

        return am5.Bullet.new(root, {
            sprite: container,
        });
    });

    function findParentEntities(project) {
        let selectedRegion = null;
        let selectedCountry = null;

        allData.regions.forEach((region) => {
            region.countries.forEach((country) => {
                country.projects.forEach((p) => {
                    if (p.id === project.id) {
                        selectedRegion = region;
                        selectedCountry = country;
                    }
                });
            });
        });

        return { selectedRegion, selectedCountry };
    }

    function handleBulletClick(project) {
        const parentEntities = findParentEntities(project);
        
        // currentState'i güncelle
        currentState.level = "projects";
        currentState.selectedRegion = parentEntities.selectedRegion;
        currentState.selectedCountry = parentEntities.selectedCountry;

        // Menüyü projelere göre yeniden çiz
        renderMenu("projects");

        // İsteğe bağlı: Haritayı da seçilen ülkeye zoomla
        updateMapForCurrentState();
        
        // Eğer projenin bir linki varsa, yeni sekmede aç
        if (project.link) {
            //window.open(project.link);
        }
    }

    // JSON verisini çekme
    async function fetchAndLoadData() {
        try {
            const response = await fetch("./assets/api/data.json");
            if (!response.ok) {
                throw new Error("JSON dosyası yüklenemedi: " + response.status);
            }

            allData = await response.json();

            console.log("JSON geldi mi?", allData);
            console.log("Bölge sayısı:", allData.regions?.length || 0);

            renderMenu("regions");

            const allProjects = [];
            allData.regions.forEach((region) => {
                region.countries.forEach((country) => {
                    country.projects.forEach((project) => allProjects.push(project));
                });
            });

            console.log("Toplam proje sayısı:", allProjects.length);

            pointSeries.data.setAll(
                allProjects
                    .filter((project) => project.coordinates && project.coordinates.length === 2)
                    .map((project) => ({
                        geometry: {
                            type: "Point",
                            coordinates: [project.coordinates[1], project.coordinates[0]], // lon, lat
                        },
                        title: project.name,
                        resource: project.resources[0],
                        ...project,
                    }))
            );

            chart.goHome();
        } catch (error) {
            console.error("Veri çekme hatası:", error);
        }
    }

    // Menüyü render eden ana fonksiyon
    function renderMenu(level) {
        const menuList = document.getElementById("menu-list");
        menuList.innerHTML = ""; // Eski menü elemanlarını temizle

        if (level === "regions") {
            // Regions seviyesindeyken, sadece bölgeler listesi görünür
            // "Geri" butonu ve dinamik başlık yok.
        } else {
            // "Geri" butonu ve dinamik başlık tek bir satırda
            const headerLi = document.createElement("li");
            headerLi.classList.add("menu-header");

            const backButton = document.createElement("button");
            backButton.classList.add("back-arrow");
            backButton.setAttribute("aria-label", "Geri");
            backButton.setAttribute("title", "Geri");
            backButton.classList.add("back-button");
            backButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"/></svg>`;
            backButton.onclick = handleBackButtonClick;

            const title = document.createElement("span");
            title.classList.add("menu-title-dynamic");

            if (level === "countries") {
                title.textContent = currentState.selectedRegion.name;
            } else if (level === "projects") {
                title.textContent = currentState.selectedCountry.name;
            }

            headerLi.appendChild(backButton);
            headerLi.appendChild(title);
            menuList.appendChild(headerLi);
        }

        let items = [];
        if (level === "regions") {
            items = allData.regions;
        } else if (level === "countries") {
            items = currentState.selectedRegion.countries;
        } else if (level === "projects") {
            items = currentState.selectedCountry.projects;
        }

        items.forEach((item) => {
            const li = document.createElement("li");
            // Projeler için farklı bir HTML yapısı olabilir
            if (level === "projects") {
                // Görseldeki gibi projenin ismini ve kaynak kısaltmasını gösterir
                li.innerHTML = `
                <a class="project-item" href="${item.link}" data-id="${item.id}">
                    <div class="project-content">
                        <div class="project-title">${item.name}</div>
                        <div class="project-company">${item.company}</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                </a>
            `;
                li.onclick = () => handleItemClick(item, level);
            } else {
                li.innerHTML = `${item.name} <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"></path></svg></span>`;
                li.onclick = () => handleItemClick(item, level);
            }
            menuList.appendChild(li);
        });

        // Burada harita güncellemesini çağırmayı kaldırıyoruz, çünkü handleItemClick'te çağıracağız.
        // updateMapForCurrentState();
    }

    // Menüdeki bir elemana tıklandığında
    function handleItemClick(item, level) {
        if (level === "regions") {
            currentState.level = "countries";
            currentState.selectedRegion = item;
            renderMenu("countries");
            updateMapForCurrentState();
        } else if (level === "countries") {
            currentState.level = "projects";
            currentState.selectedCountry = item;
            renderMenu("projects");
            updateMapForCurrentState();
        } else if (level === "projects") {
            
        }
    }

    // Geri butonuna tıklandığında
    function handleBackButtonClick() {
        if (currentState.level === "projects") {
            currentState.level = "countries";
            currentState.selectedCountry = null;
            renderMenu("countries");
        } else if (currentState.level === "countries") {
            currentState.level = "regions";
            currentState.selectedRegion = null;
            renderMenu("regions");
        }
        updateMapForCurrentState();
    }

    // Haritayı güncelleyen fonksiyon
    function updateMapForCurrentState() {
        let projectsToShow = [];

        if (currentState.level === "regions") {
            allData.regions.forEach((region) => {
                region.countries.forEach((country) => {
                    country.projects.forEach((project) => projectsToShow.push(project));
                });
            });
            chart.goHome();
        } else if (currentState.level === "countries") {
            currentState.selectedRegion.countries.forEach((country) => {
                country.projects.forEach((project) => projectsToShow.push(project));
            });
            chart.zoomToGeoPoint(
                {
                    latitude: currentState.selectedRegion.center[0],
                    longitude: currentState.selectedRegion.center[1],
                },
                currentState.selectedRegion.zoom,
                true
            );
        } else if (currentState.level === "projects") {
            projectsToShow = currentState.selectedCountry.projects;
            chart.zoomToGeoPoint(
                {
                    latitude: currentState.selectedCountry.center[0],
                    longitude: currentState.selectedCountry.center[1],
                },
                currentState.selectedCountry.zoom,
                true
            );
        } else {
            chart.goHome();
        }

        console.log("Tüm projeler yüklendi, marker sayısı:", pointSeries.data.length);
        console.log(pointSeries.data.values); // Her bir proje detayını yazdır
    }

    // Uygulamayı başlat
    fetchAndLoadData();
}); // end am5.ready()