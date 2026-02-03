<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Price Range</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
/* Slider UI */
.range-ui {
    pointer-events: none;
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    appearance: none;
    background: none;
}

.range-ui::-webkit-slider-thumb {
    pointer-events: auto;
    appearance: none;
    width: 18px;
    height: 18px;
    background: #f97316;
    border-radius: 50%;
    border: 2px solid white;
    cursor: pointer;
}

.range-ui::-moz-range-thumb {
    pointer-events: auto;
    width: 18px;
    height: 18px;
    background: #f97316;
    border-radius: 50%;
    border: 2px solid white;
    cursor: pointer;
}
</style>
</head>

<body class="bg-gray-100 p-10">

<div class="w-72 p-4 bg-white rounded-lg shadow">
    <h2 class="text-sm font-semibold mb-4 text-gray-800">PRICE RANGE</h2>

    <!-- SLIDER -->
    <div class="relative h-6 mb-4">
        <div class="absolute top-1/2 -translate-y-1/2 w-full h-1.5 bg-gray-200 rounded-full"></div>
        <div id="progress" class="absolute top-1/2 -translate-y-1/2 h-1.5 bg-orange-500 rounded-full"></div>

        <input type="range" id="min" min="0" max="1000" value="50" class="range-ui">
        <input type="range" id="max" min="0" max="1000" value="750" class="range-ui">
    </div>

    <!-- DISPLAY -->
    <div class="flex items-center gap-2 mb-6">
        <div class="relative w-1/2">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">$</span>
            <input id="minText" readonly class="w-full border rounded-md pl-6 py-2 text-sm">
        </div>
        <span class="text-gray-400">—</span>
        <div class="relative w-1/2">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">$</span>
            <input id="maxText" readonly class="w-full border rounded-md pl-6 py-2 text-sm">
        </div>
    </div>

    <!-- RADIO -->
    <div class="space-y-3">
        <label class="flex items-center gap-3 cursor-pointer">
            <input type="radio" name="price" class="hidden peer" data-min="0" data-max="1000">
            <span class="w-5 h-5 rounded-full border-2 flex items-center justify-center peer-checked:border-orange-500">
                <span class="w-2.5 h-2.5 bg-orange-500 rounded-full scale-0 peer-checked:scale-100"></span>
            </span>
            <span class="text-sm">All Price</span>
        </label>

        <label class="flex items-center gap-3 cursor-pointer">
            <input type="radio" name="price" class="hidden peer" data-min="0" data-max="20">
            <span class="w-5 h-5 rounded-full border-2 flex items-center justify-center peer-checked:border-orange-500">
                <span class="w-2.5 h-2.5 bg-orange-500 rounded-full scale-0 peer-checked:scale-100"></span>
            </span>
            <span class="text-sm">Under $20</span>
        </label>

        <label class="flex items-center gap-3 cursor-pointer">
            <input type="radio" name="price" class="hidden peer" data-min="20" data-max="100">
            <span class="w-5 h-5 rounded-full border-2 flex items-center justify-center peer-checked:border-orange-500">
                <span class="w-2.5 h-2.5 bg-orange-500 rounded-full scale-0 peer-checked:scale-100"></span>
            </span>
            <span class="text-sm">$20 – $100</span>
        </label>
    </div>
</div>

<script>
const min = document.getElementById('min');
const max = document.getElementById('max');
const progress = document.getElementById('progress');
const minText = document.getElementById('minText');
const maxText = document.getElementById('maxText');
const radios = document.querySelectorAll('input[name="price"]');

function update(fromSlider = false) {
    let minVal = +min.value;
    let maxVal = +max.value;
    const range = +min.max;

    if (minVal > maxVal) {
        min.value = maxVal;
        minVal = maxVal;
    }

    minText.value = minVal.toLocaleString();
    maxText.value = maxVal.toLocaleString();

    const left = (minVal / range) * 100;
    const width = ((maxVal - minVal) / range) * 100;

    progress.style.left = left + '%';
    progress.style.width = width + '%';

    if (fromSlider) {
        radios.forEach(r => {
            r.checked =
                minVal == r.dataset.min &&
                maxVal == r.dataset.max;
        });
    }
}

[min, max].forEach(s =>
    s.addEventListener('input', () => update(true))
);

radios.forEach(r =>
    r.addEventListener('change', () => {
        min.value = r.dataset.min;
        max.value = r.dataset.max;
        update();
    })
);

update();
</script>

</body>
</html>
