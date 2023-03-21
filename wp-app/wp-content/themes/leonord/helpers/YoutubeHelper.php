<?php

function extractIdFromLink(
    string $link
):string {
    parse_str(
        parse_url($link, PHP_URL_QUERY),
        $youtubeData
    );

    return $youtubeData['v'];
}

function getYoutubePreview(
    string $videoId
):string {
    return sprintf(
        'https://img.youtube.com/vi/%s/maxresdefault.jpg',
        $videoId
    );
}