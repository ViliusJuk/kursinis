<ul class="list-unstyled comments">
    @foreach ($comments as $comment)
    <li>
        <div class="d-flex mb-4">
            <div class="pe-2 flex-grow-1" style="width: 75px; min-width: 75px;">
                <!-- Add the comment author's profile image here -->
                <img class="rounded-circle shadow-sm img-fluid img-thumbnail" src="img/person-2.jpg" alt=""/>
            </div>
            <div class="ps-2">
                <p class="small mb-0 text-primary">{{ $comment->created_at->format('d M Y') }}</p>
                <h5>{{ $comment->Fullname }}</h5>
                <p class="text-muted text-sm mb-2">{{ $comment->feedback }}</p>
                <a class="reset-anchor text-sm" href="#!"><i class="fas fa-share me-2 text-primary"></i><strong>Atsakyti</strong></a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
