<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Completed Tasks</title>
  </head>
  <body>
    <div class="flex justify-center items-center text-[#8ea6c8] min-h-screen bg-[#cbd7e3]">
      <div class="h-[70vh]  w-[30vw] bg-white flex-column rounded-lg p-4 relative">
        <p class="text-xl font-semibold mt-2 text-[#063c76] text-center pt-9 pb-4">My Todo Task</p>
        <p class="text-[#063c76] text-center p-9 border-[2px] rounded-md border-gray-200">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit qui iste, temporibus dolorem ut doloremque neque error quis cumque obcaecati incidunt doloribus praesentium, porro impedit corrupti molestias veniam? Tempore, sint!
        </p>

        <div class="flex items-center justify-center mt-4 py-4 px-8 border-gray-200 border-[2px] gap-4 rounded-md">
          <p>From</p> <span>-</span> <p>To</p>
        </div>

        <button
          type="button"
          class="inline-block px-7 py-3 mt-9 bg-green-500 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          Start Task
        </button>
      </div>
    </div>
  </body>
</html>