@extends('layouts.main')

@section('container')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <!-- <h5>{{ $post["author"] }}</h5> -->
    {!! $post->body !!}
</article>

<a href="/posts">Back Posts</a>
@endsection

<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, vero. Corrupti, nemo. Rerum, quisquam accusantium perspiciatis, ipsa suscipit nisi ipsam impedit doloremque itaque consequuntur porro amet molestias temporibus, sint laborum voluptas voluptates perferendis tempora! Suscipit optio at eveniet consequatur saepe impedit quo fugiat enim consectetur nisi neque vitae odio,</p><p>recusandae hic quaerat quae molestiae totam repellendus amet ipsam eaque vero perspiciatis quia! Officiis id eius cupiditate ipsa, quae repellendus rem at dicta, sunt possimus illo error eaque! Magni rerum quasi, magnam corrupti reiciendis mollitia quaerat consectetur harum fugiat quisquam asperiores. Dolorum, laboriosam cumque. Vel possimus quaerat ab doloribus dolore dolorem fugit est, porro maiores quisquam aspernatur repudiandae fuga reprehenderit facere blanditiis at, incidunt minima obcaecati cumque molestias sunt laboriosam, dolor adipisci ullam.</p><p>Recusandae tempore, eaque doloribus odio unde consequatur distinctio officia. Alias impedit illum quisquam maiores magnam nemo. Ullam aliquam ab perferendis architecto enim sed modi ipsam quibusdam maiores eos?</p>

Post::create(['title'=> 'Judul Ke tiga','slug'=> 'judul-ketiga','excerpt'=> 'Lorem ipsum ketiga.','body'=> '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, vero. Corrupti, nemo. Rerum, quisquam accusantium perspiciatis, ipsa suscipit nisi ipsam impedit doloremque itaque consequuntur porro amet molestias temporibus, sint laborum voluptas voluptates perferendis tempora! Suscipit optio at eveniet consequatur saepe impedit quo fugiat enim consectetur nisi neque vitae odio,</p><p>recusandae hic quaerat quae molestiae totam repellendus amet ipsam eaque vero perspiciatis quia! Officiis id eius cupiditate ipsa, quae repellendus rem at dicta, sunt possimus illo error eaque! Magni rerum quasi, magnam corrupti reiciendis mollitia quaerat consectetur harum fugiat quisquam asperiores. Dolorum, laboriosam cumque. Vel possimus quaerat ab doloribus dolore dolorem fugit est, porro maiores quisquam aspernatur repudiandae fuga reprehenderit facere blanditiis at, incidunt minima obcaecati cumque molestias sunt laboriosam, dolor adipisci ullam.</p><p>Recusandae tempore, eaque doloribus odio unde consequatur distinctio officia. Alias impedit illum quisquam maiores magnam nemo. Ullam aliquam ab perferendis architecto enim sed modi ipsam quibusdam maiores eos?</p>']) -->