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
    <div class="flex justify-center items-center font-semibold text-[#8ea6c8] min-h-screen bg-[#cbd7e3]">
      <div class="h-[70vh]  w-[30vw] bg-white flex-column rounded-lg p-4 relative">
        <p class="text-xl font-semibold mt-2 mb-4 text-[#063c76] text-center p-9">Create New Task</p>
          <form method="POST" action="../../../src/controllers/auth.php">
            <div class="mb-6">
              <div class="mt-3 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                  <p>Title</p>
              </div>
              <input
                type="text"
                name="title"
                class="block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Task Title"
              />
            </div>

            <div class="mb-6">
              <div class="mt-3 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                  <p>Description</p>
              </div>
              <textarea
                type="text"
                name="description"
                class="block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Description"
              ></textarea>
            </div>

            <div class="mb-6">
              <div class="mt-3 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                <p>Planned Start Date</p>
              </div>
              <input
                type="datetime-local"
                name="start_date"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Start Date"
              />
            </div>
            <div class="mb-6">
              <div class="mt-3 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                <p>Planned End Date</p>
              </div>
              <input
                type="datetime-local"
                name="end_date"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Start Date"
              />
            </div>

            <!-- Submit button -->
            <button
              type="submit"
              name="create"
              class="inline-block px-7 py-3 bg-green-500 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              Create Task
            </button>
          </form>
        </div>
    </div>
  </body>
</html>