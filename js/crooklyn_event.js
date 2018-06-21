
function onClickEditor(root_url, stageName, currency_slug) {
    var url = root_url + "editors/" + stageName + "/" + currency_slug;
    window.open(url, '_blank');
}

function onClickTrack(root_url, track_id) {
    var url = root_url + "tracks/list/" + track_id;
    window.open(url, '_blank');
}
