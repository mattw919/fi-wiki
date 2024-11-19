<footer class="print-hidden">
    @if(count(setting('app-footer-links', [])) > 0)
        @foreach(setting('app-footer-links', []) as $link)
            <a href="{{ $link['url'] }}" target="_blank"
               rel="noopener">{{ strpos($link['label'], 'trans::') === 0 ? trans(str_replace('trans::', '', $link['label'])) : $link['label'] }}</a>
        @endforeach
    @endif
    @if(getLastUpdated())
        <div style="margin-top: 10px; font-size: 0.9rem; color: #555;">
            Last Updated: {{ getLastUpdated() }}
        </div>
    @endif
</footer>