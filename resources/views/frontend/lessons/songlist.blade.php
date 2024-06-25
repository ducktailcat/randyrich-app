@extends('layouts.randy-frontend-layout')
@section('content')
    <section>
        <div>
            <div class="inner-row">
                <x-lessons-nav />
                <h2 style="margin-bottom: 0; font-size: 1.4rem; font-weight:bold">Browse And Search Our Catalogue</h2>
                <h4 style="margin-top: 0px; font-weight:bold">Click on the Songtitle to Preview the Videolesson</h4>
                <table id="lessons-table" class="display">
                    <thead>
                        <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Guitar Player</th>
                            <th>Level</th>
                            <th>Shop</th>
                            <th>Udemy</th>
                            <th>Patreon</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($lessons as $l)
                            <tr>
                                <td style="text-align: left" class="songtitle" data="{{ $l->videoUrl }}">{{ $l->song }}
                                </td>
                                <td style="text-align: left">{{ $l->artist }}</td>
                                <td style="text-align: left">{{ $l->guitar }}</td>
                                <td>{{ $l->level }}</td>
                                <td>
                                    @if ($l->shopUrl)
                                        <a href="https://randyrich.shop/products/{{ $l->shopUrl }}"
                                            class="btn-buynow">Buy Now</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($l->udemy == $l->u_id)
                                        <a
                                            href="https://www.udemy.com/{{ $l->u_link }}{{ $coupon }}">{{ $l->u_title }}</a>
                                    @endif
                                </td>
                                <td class="patreon-check tooltip">
                                    @if ($l->patreon)
                                        <a style="display:inline-block" href="https://www.patreon.com/ducktailcat"><img
                                                src="/img/check.svg" alt="yes"></a>
                                        <span class="tooltiptext">Check out Patreon <br> by clicking the checkmark</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div id="videoModal" class="video-modal">
                    <div class="modal-content">
                        <iframe id="lessonIframe" class="lesson-iframe" title="YouTube video player" frameborder="10px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div id="closeModal" class="modal-close-btn"><span class="close">CLOSE X</span></div>
                </div>
            </div>
        </div>
    </section>
@endsection
