<form action="{{ route('admin.categori.update', $categori) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("put")
    <label for="name" class="block text-sm font-medium text-gray-700">Category
        Name</label>
    <input type="text" id="name" name="name" value="{{$categori->name}}" class="w-full p-2 mt-2 border rounded"
        placeholder="Enter category name">

    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
    <input type="file" id="image" name="image_categori" value="{{$categori->image_categori}}" class="w-full p-2 mt-2 border rounded"
        placeholder="input image">

        <img src="{{ Storage::url($categori->image_categori) }}" alt="" style="width: 10%">
    <button type="submit" class="px-4 py-2 mt-4 text-white bg-green-500 rounded shadow hover:bg-green-600">
        Save
    </button>
</form>
