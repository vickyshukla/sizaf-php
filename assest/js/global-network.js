const observerTarget = document.getElementById("stats-section");
let started = false;

const animateCount = (el, target, step, delay) => {
    let count = 0;
    const interval = setInterval(() => {
        count += step;
        if (count >= target) {
            count = target;
            clearInterval(interval);
        }
        el.textContent = count;
    }, delay);
};

const observer = new IntersectionObserver(
    (entries) => {
        if (entries[0].isIntersecting && !started) {
            started = true;
            animateCount(document.getElementById("continents-count"), 7, 1, 200);
            animateCount(document.getElementById("countries-count"), 113, 2, 20);
            animateCount(document.getElementById("locations-count"), 4905, 30, 1);
        }
    },
    { threshold: 0.5 }
);

observer.observe(observerTarget);

am5.ready(function () {
    const root = am5.Root.new("chartdiv");
    root.setThemes([am5themes_Animated.new(root)]);

    const chart = root.container.children.push(
        am5map.MapChart.new(root, {
            panX: "translateX",
            panY: "translateY",
            projection: am5map.geoMercator(),
        })
    );

    const polygonSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"],
            fill: am5.color(0xeeeeee),
            stroke: am5.color(0xffffff),
        })
    );

    polygonSeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        interactive: true,
    });

    const pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

    pointSeries.bullets.push(() => {
        const mainCircle = am5.Circle.new(root, {
            radius: 4,
            fill: am5.color(0xff6b6b),
            tooltipText: "{title}",
        });

        const expandingCircle = am5.Circle.new(root, {
            radius: 4,
            fill: am5.color(0xff6b6b),
            opacity: 0.5,
        });

        expandingCircle.animate({
            key: "radius",
            to: 10,
            duration: 800,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity,
            from: 4,
        });

        expandingCircle.animate({
            key: "opacity",
            to: 0,
            duration: 900,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity,
        });

        const container = am5.Container.new(root, {});
        container.children.push(mainCircle);
        container.children.push(expandingCircle);

        return am5.Bullet.new(root, {
            sprite: container,
        });
    });

    pointSeries.data.setAll([
        { geometry: { type: "Point", coordinates: [-71.0589, 42.3601] }, title: "United States - Boston" },
        { geometry: { type: "Point", coordinates: [-3.7038, 40.4168] }, title: "Spain - Madrid" },
        { geometry: { type: "Point", coordinates: [2.3522, 48.8566] }, title: "France - Paris" },
        { geometry: { type: "Point", coordinates: [139.6917, 35.6895] }, title: "Japan - Tokyo" },
        { geometry: { type: "Point", coordinates: [0.1276, 51.5074] }, title: "United Kingdom - London" },
        { geometry: { type: "Point", coordinates: [116.4074, 39.9042] }, title: "China - Beijing" },
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - New Delhi" },
        { geometry: { type: "Point", coordinates: [13.4050, 52.5200] }, title: "Germany - Berlin" },
        { geometry: { type: "Point", coordinates: [18.4241, -33.9249] }, title: "South Africa - Cape Town" },
        { geometry: { type: "Point", coordinates: [36.8219, -1.2864] }, title: "Kenya - Nairobi" },
        { geometry: { type: "Point", coordinates: [30.0444, 31.2357] }, title: "Egypt - Cairo" },
        { geometry: { type: "Point", coordinates: [151.2093, -33.8688] }, title: "Australia - Sydney" },
        { geometry: { type: "Point", coordinates: [-58.4173, -34.6118] }, title: "Argentina - Buenos Aires" },
        { geometry: { type: "Point", coordinates: [14.2350, 51.9253] }, title: "Czech Republic - Prague" },
        { geometry: { type: "Point", coordinates: [-100.4429, 39.0119] }, title: "Mexico - Mexico City" },
        { geometry: { type: "Point", coordinates: [9.0820, 8.6753] }, title: "Nigeria - Abuja" },
        { geometry: { type: "Point", coordinates: [77.1025, 28.6139] }, title: "India - New Delhi" },
        { geometry: { type: "Point", coordinates: [12.4964, 41.9028] }, title: "Italy - Rome" },
        { geometry: { type: "Point", coordinates: [103.8198, 1.3521] }, title: "Singapore - Singapore" },
        { geometry: { type: "Point", coordinates: [4.3517, 50.8503] }, title: "Belgium - Brussels" },
        { geometry: { type: "Point", coordinates: [77.0369, 38.9072] }, title: "United States - Washington, D.C." },
        { geometry: { type: "Point", coordinates: [79.3832, 43.6532] }, title: "Canada - Toronto" },
        { geometry: { type: "Point", coordinates: [104.1954, 35.8617] }, title: "China - Beijing" },
        { geometry: { type: "Point", coordinates: [73.8567, 18.5204] }, title: "India - Mumbai" },
        { geometry: { type: "Point", coordinates: [19.4334, 50.0614] }, title: "Poland - Krakow" },
        { geometry: { type: "Point", coordinates: [14.5501, 46.0569] }, title: "Slovenia - Ljubljana" },
        { geometry: { type: "Point", coordinates: [-74.0060, 40.7128] }, title: "United States - New York" },
        { geometry: { type: "Point", coordinates: [151.2153, -33.8568] }, title: "Australia - Sydney" },
        { geometry: { type: "Point", coordinates: [55.7558, 37.6173] }, title: "Russia - Moscow" },
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Bolivia - La Paz" },
        { geometry: { type: "Point", coordinates: [77.4445, 28.4082] }, title: "India - Delhi" },
        { geometry: { type: "Point", coordinates: [25.276987, 54.5744] }, title: "Latvia - Riga" },
        { geometry: { type: "Point", coordinates: [16.3738, 48.2082] }, title: "Austria - Vienna" },
        { geometry: { type: "Point", coordinates: [31.0461, 38.9637] }, title: "Turkey - Ankara" },
        { geometry: { type: "Point", coordinates: [77.5999, 12.9716] }, title: "India - Bangalore" },
        { geometry: { type: "Point", coordinates: [99.9066, 7.0050] }, title: "Thailand - Bangkok" },
        { geometry: { type: "Point", coordinates: [-61.2248, 10.6918] }, title: "Trinidad and Tobago - Port of Spain" },
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Chile - Santiago" },
        { geometry: { type: "Point", coordinates: [2.3510, 48.8566] }, title: "France - Paris" },
        { geometry: { type: "Point", coordinates: [-63.5887, -34.9003] }, title: "Argentina - Buenos Aires" },
        { geometry: { type: "Point", coordinates: [77.5946, 12.9716] }, title: "India - Bengaluru" },
        { geometry: { type: "Point", coordinates: [31.2304, 121.4737] }, title: "China - Shanghai" },
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - Delhi" },
        { geometry: { type: "Point", coordinates: [29.9511, 31.0201] }, title: "Egypt - Cairo" },
        { geometry: { type: "Point", coordinates: [120.9842, 14.5995] }, title: "Philippines - Manila" },
        { geometry: { type: "Point", coordinates: [100.5167, 13.7563] }, title: "Thailand - Bangkok" },
        { geometry: { type: "Point", coordinates: [4.9041, 52.3676] }, title: "Netherlands - Amsterdam" },
        { geometry: { type: "Point", coordinates: [98.9624, 19.9206] }, title: "Laos - Vientiane" },
        { geometry: { type: "Point", coordinates: [7.4979, 50.7369] }, title: "Germany - Bonn" },
        { geometry: { type: "Point", coordinates: [15.9805, 45.8964] }, title: "Croatia - Zagreb" },
        { geometry: { type: "Point", coordinates: [-2.9705, 12.6354] }, title: "Ghana - Accra" },
        { geometry: { type: "Point", coordinates: [-43.1729, -22.9068] }, title: "Brazil - Rio de Janeiro" },
        { geometry: { type: "Point", coordinates: [55.9533, -3.1883] }, title: "Scotland - Edinburgh" },
        { geometry: { type: "Point", coordinates: [0.1276, 51.5074] }, title: "United Kingdom - London" },
        { geometry: { type: "Point", coordinates: [-61.0224, 13.4125] }, title: "Jamaica - Kingston" },
        { geometry: { type: "Point", coordinates: [-103.2573, 45.0739] }, title: "USA - South Dakota" },
        { geometry: { type: "Point", coordinates: [28.9784, 41.0082] }, title: "Turkey - Istanbul" },
        { geometry: { type: "Point", coordinates: [80.2707, 13.0827] }, title: "India - Chennai" },
        { geometry: { type: "Point", coordinates: [-80.1918, 25.7617] }, title: "USA - Miami" },
        { geometry: { type: "Point", coordinates: [39.9042, 32.8597] }, title: "Turkey - Ankara" },
        { geometry: { type: "Point", coordinates: [-92.8731, 14.6349] }, title: "Guatemala - Guatemala City" },
        { geometry: { type: "Point", coordinates: [73.6100, 30.1575] }, title: "Bangladesh - Dhaka" },
        { geometry: { type: "Point", coordinates: [-60.6508, -3.0348] }, title: "Guyana - Georgetown" },
        { geometry: { type: "Point", coordinates: [121.0697, 14.6286] }, title: "Philippines - Quezon City" },
        { geometry: { type: "Point", coordinates: [78.9629, 20.5937] }, title: "India - Delhi" },
        { geometry: { type: "Point", coordinates: [-68.1193, -16.5000] }, title: "Chile - Santiago" },
        { geometry: { type: "Point", coordinates: [-98.4936, 29.4241] }, title: "USA - San Antonio" },
        { geometry: { type: "Point", coordinates: [114.1694, -8.4095] }, title: "Indonesia - Denpasar" },
        { geometry: { type: "Point", coordinates: [54.5892, 24.4795] }, title: "United Arab Emirates - Abu Dhabi" },
        { geometry: { type: "Point", coordinates: [15.5000, 43.9159] }, title: "Serbia - Belgrade" },
        { geometry: { type: "Point", coordinates: [28.5633, 77.2090] }, title: "India - Delhi" },
        { geometry: { type: "Point", coordinates: [47.3769, 8.5417] }, title: "Switzerland - Zurich" },
    ]);
});