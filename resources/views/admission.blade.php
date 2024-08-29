<x-fronted-layout>
    <div class="container">
        <div class="grid bg-slate-500 p-6">
            <h3 class="text-lime-500 text-center m-9 text-4xl font-serif">Admisson</h3>
            <form action="/store-admission" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-white bg-slate-600 w-full">
                    <label for="name">Full Name:</label>
                    <input class="w-6/12 bg-slate-600" type="text" name="name" id="name">
                    @error('name')
                        <div class="text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="email">Email:</label>
                    <input class="bg-slate-600" type="email" name="email" id="email" placeholder="abc@gmail.com">
                    @error('email')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="addresss">Address:</label>
                    <input class="bg-slate-600" type="text" name="address" id="address">
                    @error('address')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600 ">
                    <label for="phone">Phone No:</label>
                    <input class="bg-slate-600" type="tel" name="phone" id="phone">
                    @error('phone')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
                </div>
                <br>
                <div class="text-white bg-slate-600">
                    <label for="courses">Select:</label>
                   
                    <select name="course" id="course" class="bg-slate-600 w-6/12">
                        @foreach ($courses as $course)
                        <option class="bg-slate-600" value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="text-white btn">
                    <input class="bg-lime-500 px-6 py-2 border rounded-md hover:bg-lime-700" type="submit"
                        value="CREATE">
                </div>
            </form>

            <div class="">
                {{$admission->student}}
            </div>
        </div>
    </div>
</x-fronted-layout>