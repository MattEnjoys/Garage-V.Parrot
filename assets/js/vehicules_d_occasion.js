document.addEventListener("DOMContentLoaded", function () {
    const kmSlider = document.getElementById("kmSlider");
    const priceSlider = document.getElementById("priceSlider");
    const yearSlider = document.getElementById("yearSlider");

    function updateFilterDetail(
        sliderId,
        detailId,
        minVal,
        maxVal,
        shouldFormat
    ) {
        const slider = document.getElementById(sliderId);
        const detailElement = document.querySelector(detailId);

        slider.noUiSlider.on("update", (values) => {
            const minValue = parseInt(values[0]);
            const maxValue = parseInt(values[1]);

            let formattedMinValue = minValue;
            let formattedMaxValue = maxValue;

            if (shouldFormat) {
                formattedMinValue = minValue.toLocaleString("fr-FR");
                formattedMaxValue = maxValue.toLocaleString("fr-FR");
            }

            detailElement.textContent = `${formattedMinValue} ${minVal} - ${formattedMaxValue} ${maxVal}`;
        });
    }

    function initializeSlider(
        sliderElement,
        startMin,
        startMax,
        minRange,
        maxRange,
        detailId,
        minVal,
        maxVal,
        shouldFormat
    ) {
        noUiSlider.create(sliderElement, {
            start: [startMin, startMax],
            connect: true,
            step: 1,
            range: {
                min: minRange,
                max: maxRange,
            },
            format: {
                to: (value) => Math.round(value),
                from: (value) => value,
            },
        });

        updateFilterDetail(
            sliderElement.id,
            detailId,
            minVal,
            maxVal,
            shouldFormat
        );

        sliderElement.noUiSlider.on("update", (values) => {
            const minValue = parseInt(values[0]);
            const maxValue = parseInt(values[1]);

            // Implémentez ici votre logique de filtrage pour chaque catégorie
            // en utilisant les valeurs minValue et maxValue
            // par exemple, mettez à jour la liste des véhicules affichés.
        });
    }

    initializeSlider(
        kmSlider,
        0,
        200000,
        0,
        200000,
        ".FilterKmsDetail",
        "Km",
        "Km",
        true
    );
    initializeSlider(
        priceSlider,
        0,
        300000,
        0,
        300000,
        ".FilterPricesDetail",
        "€",
        "€",
        true
    );
    initializeSlider(
        yearSlider,
        1993,
        2023,
        1993,
        2023,
        ".FilterYearsDetail",
        "",
        "",
        false
    );

    const cars = document.querySelectorAll(
        ".col.d-flex.justify-content-center"
    );

    function updateCarVisibility() {
        const kmRange = kmSlider.noUiSlider.get();
        const priceRange = priceSlider.noUiSlider.get();
        const yearRange = yearSlider.noUiSlider.get();

        cars.forEach((car) => {
            const km = parseInt(
                car.querySelector(".card-text-Year.text-end.Red1.h3-p")
                    .textContent
            );
            const price = parseInt(
                car.querySelector(".card-text-Year.price.Black.h3-p")
                    .textContent
            );
            const year = parseInt(
                car.querySelector(".card-text-Year.text-end.Red1.h3-p")
                    .textContent
            );

            const isKmInRange = km >= kmRange[0] && km <= kmRange[1];
            const isPriceInRange =
                price >= priceRange[0] && price <= priceRange[1];
            const isYearInRange = year >= yearRange[0] && year <= yearRange[1];

            if (isKmInRange && isPriceInRange && isYearInRange) {
                car.style.display = "block";
            } else {
                car.style.display = "none";
            }
        });
    }

    kmSlider.noUiSlider.on("update", updateCarVisibility);
    priceSlider.noUiSlider.on("update", updateCarVisibility);
    yearSlider.noUiSlider.on("update", updateCarVisibility);

    updateCarVisibility(); // Initial update based on default slider values

    const filteredCarsContainer = document.getElementById(
        "filteredCarsContainer"
    );

    function updateFilteredCars() {
        const kmRange = kmSlider.noUiSlider.get();
        const priceRange = priceSlider.noUiSlider.get();
        const yearRange = yearSlider.noUiSlider.get();

        const xhr = new XMLHttpRequest();
        xhr.open(
            "GET",
            `your_server_endpoint?minKm=${kmRange[0]}&maxKm=${kmRange[1]}&minPrice=${priceRange[0]}&maxPrice=${priceRange[1]}&minYear=${yearRange[0]}&maxYear=${yearRange[1]}`,
            true
        );

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const carsData = JSON.parse(xhr.responseText);

                const carsHtml = carsData
                    .map(
                        (car) => `
                    <div class="col d-flex justify-content-center">
                        <!-- Votre structure de carte ici -->
                    </div>
                `
                    )
                    .join("");

                filteredCarsContainer.innerHTML = carsHtml;
            }
        };

        xhr.send();
    }

    kmSlider.noUiSlider.on("update", updateFilteredCars);
    priceSlider.noUiSlider.on("update", updateFilteredCars);
    yearSlider.noUiSlider.on("update", updateFilteredCars);

    updateFilteredCars();
});
