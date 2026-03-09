<!-- resources/views/components/post-card.blade.php -->

<a href="{{ $url }}" class="text-decoration-none text-dark">
    <div class="mb-4 post-list border-bottom pb-4">
        <div class="row no-gutters">
            <div class="col-md-5">
                <span class="post-thumb">
                    <img src="{{ $image }}" alt="" class="img-fluid w-100">
                </span>
            </div>

            <div class="col-md-7">
                <div class="post-article mt-sm-3">

                    <div class="meta-cat">
                        <span class="letter-spacing cat-name font-extra text-uppercase font-sm">
                            {{ $category }}
                        </span>
                    </div>

                    <h3 class="post-title mt-2">
                        {{ $title }}
                    </h3>

                    <div class="post-meta">
                        <ul class="list-inline">
                            <li class="post-view list-inline-item letter-spacing-1">
                                {{ $views }} Views
                            </li>
                        </ul>
                    </div>

                    <div class="post-content">
                        <p>{{ $excerpt }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</a>
