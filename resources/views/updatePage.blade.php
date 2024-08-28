<x-fronted-layout>


    <div class="container">
        <div class="grid bg-slate-500 p-6">
            <h3 class="text-lime-500 text-center m-9 text-4xl font-serif">Create Course</h3>
            <form action="/edit-course/{{$course->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="text-white bg-slate-600 w-full">
                    <label for="name">Course Name:</label>
                    <input class="w-6/12 bg-slate-600" value="{{$course->name}}" type="text" name="name" id="name">
                    @error('name')
                        <div class="text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="price">Course Price:</label>
                    <input class="bg-slate-600" value="{{$course->price}}" type="text" name="price" id="price">
                    @error('price')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="syllabus">Course Syllabus:</label>
                    <input class="bg-slate-600" value="{{$course->syllabus}}" type="text" name="syllabus" id="syllabus">
                    @error('syllabus')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="id">Course Image:</label>
                    <input class="bg-slate-600" value="{{$course->image}}" type="file" name="image" id="img">
                    @error('image')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <br>
                <div class="text-white btn">
                    <input class="bg-lime-500 px-6 py-2 border rounded-md hover:bg-lime-700" type="submit"
                        value="UPDATE">
                </div>
            </form>
        </div>
    </div>

  
</x-fronted-layout>
