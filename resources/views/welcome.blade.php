<x-fronted-layout>


    <div class="container">
        <div class="grid">
            <h3 class="text-blue-500 text-center m-9 text-4xl font-serif">Create Course</h3>
            <form action="" method="POST">
                <div class="text-white w-full">
                    <label for="name">Course Name:</label>
                    <input class="w-6/12" type="text" name="name" id="name">
                </div>
                <br>
                <div class="text-white ">
                    <label for="price">Course Price:</label>
                    <input type="text" name="price" id="price">
                </div>
                <br>
                <div class="text-white ">
                    <label for="syllabus">Course Syllabus:</label>
                    <input type="text" name="syllabus" id="syllabus">
                </div>
                <br>
                <div class="text-white ">
                    <label for="name">Course Image:</label>
                    <input type="file" name="img" id="img">
                </div>
                <br>
                <br>
                <div class="text-white btn">
                    <input class="bg-lime-500 px-6 py-2 border rounded-md hover:bg-lime-700" type="submit"
                        value="Create">
                </div>
            </form>
        </div>
    </div>
</x-fronted-layout>
