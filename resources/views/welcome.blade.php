<x-fronted-layout>


    <div class="container">
        <div class="grid bg-slate-500 p-6">
            <h3 class="text-lime-500 text-center m-9 text-4xl font-serif">Create Course</h3>
            <form action="/store-course" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-white bg-slate-600 w-full">
                    <label for="name">Course Name:</label>
                    <input class="w-6/12 bg-slate-600" type="text" name="name" id="name">
                    @error('name')
                        <div class="text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="price">Course Price:</label>
                    <input class="bg-slate-600" type="text" name="price" id="price">
                    @error('price')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="syllabus">Course Syllabus:</label>
                    <input class="bg-slate-600" type="text" name="syllabus" id="syllabus">
                    @error('syllabus')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="name">Course Image:</label>
                    <input class="bg-slate-600" type="file" name="image" id="img">
                    @error('image')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <br>
                <div class="text-white btn">
                    <input class="bg-lime-500 px-6 py-2 border rounded-md hover:bg-lime-700" type="submit"
                        value="CREATE">
                </div>
            </form>
        </div>
    </div>

    <section>
        <h1 class="font-bold text-4xl text-center m-4 text-blue-400">COURCES LISTS</h1>
        <div class="container">
            <div class="grid">
                <table>
                    <thead>
                        <tr class="border text-center">
                            <th class="border border-gray-400">SN.</th>
                            <th class="border border-gray-400">Course-Name</th>
                            <th class="border border-gray-400">Syallabus</th>
                            <th class="border border-gray-400">Price</th>
                            <th class="border border-gray-400">image</th>
                            <th class="border border-gray-400">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $index => $course)
                        <tr class="text-center">
                            <td class="border border-gray-500">{{++$index}}</td>
                            <td class="border border-gray-500">{{$course->name}}</td>
                            <td class="border border-gray-500">{{$course->syllabus}}</td>
                            <td class="border border-gray-500">Rs.{{$course->price}}</td>
                            <td class="border border-gray-500"><img src="{{asset($course->image)}}" alt="" width="100px"></td>
                            <td class="border border-gray-500">
                               <a href="{{route('update',$course->id)}}"> <button class="bg-green-400 border rounded-xl px-5 py-2">&#9998;</button></a>

                                <form action="/delete/{{$course->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-400 border rounded-xl px-5 py-2">&#10540;</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                       
                    </tbody>
        </div>
    </section>
</x-fronted-layout>
