@php
    use App\Models\Blog;
    $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
@endphp
<section class="upcoming-classes spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title normal-title">
                    <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    <h2>Read our most recent blog posts:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="{{ Storage::url('images/' . $item->image) }}">
                            <span>{{ \Carbon\Carbon::parse($item->date)->format('d-M-Y'); }}</span>
                        </div>
                        <div class="classes__item__text">
                            <h4><a href="{{ route('view.blog',$item->slug) }}">{{ $item->title }}</a></h4>
                            <a href="{{ route('view.blog',$item->slug) }}" class="class-btn">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
