@extends('layouts.mobile')

@section('content')
<div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3
            bg-white-rounded-lg shadow-lg tracking-white uppercase border
            border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input
                    type="file"
                    name="file"
                    id="file"
                    class="hidden"/> 

                
            </label>
</div>
        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg
            font-extrabold py-4 px-8 rounded-3xl">
            Upload
        </button>


@endsection