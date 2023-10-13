@if ($paginator->lastPage() > 1)
<ul class="pagination">
    <li class="pag-item">
        <a href="{{ 1 }}/">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="pag-item">
            <a href="{{ $i }}/"> [{{ $i }}] </a>
        </li>
    @endfor
    <li class="pag-item">
        <a href="{{ $paginator->currentPage()+1 }}/" >Next</a>
    </li>
</ul>
@endif