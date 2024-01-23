<div class="flex flex-col  space-y-4 mt-16 ">
@foreach($links as $link)
     <a href="
      /dashboard/{{$link["text"]}}/current"
     ">
       <div class="nav-links w-full flex items-center">
         <div class="flex space-x-3 w-full p-2 rounded">
           <i class="{{$link["icon"]}} mt-1 ml-4"></i>
           <span class="">
             {{$link["text"]}}
            </span>
          </div>
        </div>
      </a>
@endforeach
</div>