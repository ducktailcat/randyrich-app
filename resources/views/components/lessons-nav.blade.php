<div class="lesson-nav">
    <div class="lesson-nav-item">
      <a class="{{ (request()->segment(2) == 'songlist' ? 'active' : '') }}" href="{{ route('songlist') }}">Songlist</a>
    </div>
    <div class="lesson-nav-item">
      <a class="{{ (request()->segment(2) == 'udemy' ? 'active' : '') }}" href="{{ route('udemy') }}">Video Courses</a>
    </div>
    <div class="lesson-nav-item">
      <a class="{{ (request()->segment(2) == 'private' ? 'active' : '') }}" href="{{ route('private') }}">Private Lessons</a>
    </div>
</div>