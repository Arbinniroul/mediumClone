<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                @csrf

             

                {{-- Image --}}
                <div class="pt-6 px-6">
                    <x-input-label for="image" :value="__('Image')" />
                    <input name="image" id="images" class="block w-full text-sm border p-2 border-gray-300 rounded-lg cursor-pointer  bg-gray-50 dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400"  type="file" >
            
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>


               
                {{-- title --}}
                <div class="p-6">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"  />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
                {{-- Category --}}
                <div class="px-6">
                    <x-input-label for="category_id" :value="__('Category')" />
                    <select 
                        class="py-2 border-b bg-white text-black border outline-none rounded block w-full focus:border-indigo-500 focus:ring-indigo-500" 
                        id="category_id"
                        name="category_id"  <!-- Moved name attribute here -->
                    >
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option 
                                value="{{ $category->id }}"
                                @selected(old('category_id') == $category->id)
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                </div>
                {{-- Content --}}
                <div class="p-6 ">
                    <x-input-label for="content" :value="__('Content')" />
                    <x-text-area id="content" class="block mt-1 w-full" name="content" >{{ old('content') }}</x-text-area>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>
                <div class="p-6">
                    <x-primary-button type="submit">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
               </form>
            </div>
        </div>
    </div>
</x-app-layout>