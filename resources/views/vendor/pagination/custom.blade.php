@if ($paginator->hasPages())

 {{-- Previous Page Link --}}
 @if ($paginator->onFirstPage())
 <a class="prev page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
     <span aria-hidden="true"> <i class='bx bx-chevrons-left'></i></span>
 </a>
@else
 
     <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class='bx bx-chevrons-left'></i></a>
 
@endif



 {{-- Pagination Elements --}}
 @foreach ($elements as $element)
 {{-- "Three Dots" Separator --}}
 @if (is_string($element))
      <span class="page-numbers current" aria-current="page" >{{ $element }}</span> 
 @endif

 {{-- Array Of Links --}}
 @if (is_array($element))
     @foreach ($element as $page => $url)
         @if ($page == $paginator->currentPage())
              <span class="page-numbers current" aria-current="page">{{ $page }}</span> 
         @else
              <a class="page-numbers" href="{{ $url }}">{{ $page }}</a> 
         @endif
     @endforeach
 @endif
@endforeach



{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
 
    <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class='bx bx-chevrons-right'></i></a>
 
@else
<a class="next page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
    <span aria-hidden="true"> <i class='bx bx-chevrons-right'></i></span>
</a>
@endif



@endif 

{{-- <a href="#" class="prev page-numbers">
    <i class='bx bx-chevrons-left'></i>
</a> --}}

{{-- <span class="page-numbers current" aria-current="page">1</span>
<a href="#" class="page-numbers">2</a>
<a href="#" class="page-numbers">3</a> --}}

{{-- <a href="#" class="next page-numbers">
    <i class='bx bx-chevrons-right'></i>
</a> --}}