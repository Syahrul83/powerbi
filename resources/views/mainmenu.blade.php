
<ul class="nav nav-pills" id="mainNav">




    @foreach($items as $menu_item)

        @php


        $originalItem = $menu_item;


     $togel = null;
     $down = null;
        if(!$originalItem->children->isEmpty()) {
             $togel =   'dropdown-toggle';

              $down =   'dropdown';



        }



        if(url($menu_item->link()) == url()->current()){
              $linkAttributes =  'active';


        }else{
                 $linkAttributes = '';

        }



           $parent = Request::segment(1);
          $sub =\App\MenuItem::where('url','like','%'.$parent.'%')->first();

          if($sub != null){
         if($menu_item->id == $sub->parent_id){
               $linkAttributes =  'active';


         }
          }


        @endphp
          <li class="{{   $down  }}">
            <a class="dropdown-item {{  $togel  }} {{ $linkAttributes }}" target="{{ $menu_item->target }}" href="{{ $menu_item->url }}">{{ $menu_item->title }}

            </a>
            @php
                $submenu = $menu_item->children;

            @endphp

            @if(isset($submenu))

              @php

              @endphp


              <ul class="dropdown-menu">
                    @foreach($submenu as $item)


                        <li><a  class="dropdown-item" href="{{$item->url}}" target="{{ $item->target }}">{{$item->title}} </a></li>

                    @endforeach
                </ul>

            @endif
        </li>


    @endforeach

  </ul>
