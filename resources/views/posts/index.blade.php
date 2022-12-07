<x-app-layout>

    <div class="container py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://media.istockphoto.com/id/1384865389/es/foto/m%C3%A9xico-calles-durango-cerca-del-centro-hist%C3%B3rico-y-catedral-de-durango.jpg?s=612x612&w=0&k=20&c=oXDrgA8r6YOpxo04eJAL_OMRla_jfxQh8liLZCtYzLU= @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('post.tag', $tag)}}" class="inline-block px-3 h-6 text-white rounded-full bg-{{$tag->color}}-600">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach

        </div>  
        
        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>

</x-app-layout>
