<span>
	Showing {{ $start }} to {{ $i }} of {{ $paginator->total() }} entries
</span>
<nav class="pull-right">
	@if ($paginator->lastPage() > 1)
		<ul class="pagination" style="margin-top: 0px;">
			<!-- if actual page is not equals 1, and there is more than 5 pages then I show first page button -->
			@if ($paginator->currentPage() != 1 && $paginator->lastPage() >= 5)
				<li>
					<a href="{{ $paginator->url($paginator->url(1)) }}" >
						First
					</a>
				</li>
			@endif

			<!-- if actual page is not equals 1, then I show previous page button -->
			@if($paginator->currentPage() != 1)
				<li>
					<a href="{{ $paginator->url($paginator->currentPage()-1) }}" >
						Previous
					</a>
				</li>
			@endif

			<!-- I draw the pages... I show 2 pages back and 2 pages forward -->
			@for($i = max($paginator->currentPage()-2, 1); $i <= min(max($paginator->currentPage()-2, 1)+4,$paginator->lastPage()); $i++)
				@if($paginator->currentPage() == $i)
					<li class="active disabled">
						<a href="javascript:;">{{ $i }}</a>
					</li>
				@else
					<li>
						<a href="{{ $paginator->url($i) }}">{{ $i }}</a>
					</li>
				@endif
			@endfor

			<!-- if actual page is not equal last page, then I show the forward button-->
			@if ($paginator->currentPage() != $paginator->lastPage())
				<li>
					<a href="{{ $paginator->url($paginator->currentPage()+1) }}" >
						Next
					</a>
				</li>
			@endif

			<!-- if actual page is not equal last page, and there is more than 5 pages then I show last page button -->
			@if ($paginator->currentPage() != $paginator->lastPage() && $paginator->lastPage() >= 5)
				<li>
					<a href="{{ $paginator->url($paginator->lastPage()) }}" >
						Last
					</a>
				</li>
			@endif
		</ul>
	@endif
</nav>