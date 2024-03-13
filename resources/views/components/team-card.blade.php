<div class="owl-carousel owl-theme team-highlights">
    @foreach ($team_highlights as $team_highlight )
          <div class="asp asp-2-1">
        <img src={{ $team_highlight->image['image'] }} alt="">
    </div>
    @endforeach
</div>
