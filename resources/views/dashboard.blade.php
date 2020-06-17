@extends('layouts.master')

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>Wha do you have to say</h3>
                <form action="">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="form-group">
                        <textarea class="form-control" name="new_post" id="new-post" placeholder="Your Post" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </header>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What other people say...</h3>
            </header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur excepturi facilis fugit incidunt, ipsum laboriosam laudantium libero molestias necessitatibus nihil! Commodi ex ipsa laudantium magnam omnis repellendus sed sunt velit!</p>
                <div class="info">
                    Posted by Stef on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur excepturi facilis fugit incidunt, ipsum laboriosam laudantium libero molestias necessitatibus nihil! Commodi ex ipsa laudantium magnam omnis repellendus sed sunt velit!</p>
                <div class="info">
                    Posted by Stef on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection