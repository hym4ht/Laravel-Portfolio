<div class="navbar font-persona5v2 flex items-center text-white justify-center gap-x-6 py-4">

  <a class="link-wrapper text-2xl {{ request()->routeIs('portfolio.home') ? 'active' : '' }}" href="{{ route('portfolio.home') }}">
    <span class="fallback">Home</span>
  </a>

  <a class="link-wrapper text-2xl {{ request()->routeIs('portfolio.about') ? 'active' : '' }}" href="{{ route('portfolio.about') }}">
    <span class="fallback">About</span>
  </a>

  <a class="link-wrapper text-2xl {{ request()->routeIs('portfolio.skills') ? 'active' : '' }}" href="{{ route('portfolio.skills') }}">
    <span class="fallback">Skills</span>
  </a>

  <a class="link-wrapper text-2xl {{ request()->routeIs('portfolio.projects') ? 'active' : '' }}" href="{{ route('portfolio.projects') }}">
    <span class="fallback">Projects</span>
  </a>

  <a class="link-wrapper text-2xl {{ request()->routeIs('portfolio.contact') ? 'active' : '' }}" href="{{ route('portfolio.contact') }}">
    <span class="fallback">Contact</span>
  </a>

</div>