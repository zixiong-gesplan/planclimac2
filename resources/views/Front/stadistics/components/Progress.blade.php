<div>
    <p> {{ $title }} </p>
    <p>Meta del proyecto: {{ $progress }} de {{ $target }}.</p>
    <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
        <div class="h-4 bg-green-700 rounded-full dark:bg-green-500" style="width: {{ floor($progress/$target *100) }}%"></div>
    </div>
</div>