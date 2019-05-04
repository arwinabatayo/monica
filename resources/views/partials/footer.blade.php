<footer class="ph3 ph5-ns pb4 cf w-100">
  <div class="mw9 center">
    <div class="flex f6">
      <div class="{{ htmldir() == 'ltr' ? 'fl' : 'fr' }} w-40-ns w-100 pa2 bt b--gray-monica pt3">
        <ul>
          <li class="di mr2">{{ trans('app.footer_remarks') }} <a href="mailto:{{ config('monica.support_email_address') }}">{{ trans('app.footer_send_email') }}</a></li>
          <li class="di mr2"><a href="https://techy7.com/privacy-policy/" hreflang="en">{{ trans('app.footer_privacy') }}</a></li>
        </ul>
      </div>

      <div class="{{ htmldir() == 'ltr' ? 'fl' : 'fr' }} w-20-ns w-100 pa2 tc bt b--gray-monica pt3">
        <a href="https://techy7.com/" style="background-color: transparent; text-decoration: none;"><img src="img/techy7.svg" width="278" height="21" /></a>
      </div>

      <div class="{{ htmldir() == 'ltr' ? 'fl tr' : 'fr tl' }} w-40-ns w-100 pa2 bt b--gray-monica pt3">
        <ul>
          <li class="di ml2">{{ trans('app.footer_version', ['version' => config('monica.app_version')]) }}</li>
          @include('partials.check')
        </ul>
      </div>
    </div>
  </div>
</footer>
