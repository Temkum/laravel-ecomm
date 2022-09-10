<div class="breadcrumb-area bg-gray m-top">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">about us </li>
            </ul>
        </div>
    </div>
</div>

{{-- <a href="/">Home</a> >
<?php $link = ''; ?>
@for ($i = 1; $i <= count(Request::segments()); $i++)
    @if (($i < count(Request::segments())) & ($i > 0))
        <?php $link .= '/' . Request::segment($i); ?>
        <a href="<?= $link ?>">{{ ucwords(str_replace('-', ' ', Request::segment($i))) }}</a> >
    @else
        {{ ucwords(str_replace('-', ' ', Request::segment($i))) }}
    @endif
@endfor --}}
