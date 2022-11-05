@extends('pub_theme::layouts.app')

@section('content')

<div>
    <div>
        <h1>MARCO</h1>
    </div>
    <div>
        <v-examples></v-examples>
    </div>
    <div>
        <v-map></v-map>
    </div>
</div>

<div>
    <div>
        <h1>DAVIDE</h1>
    </div>
    <div>
        <v-map6></v-map6>
    </div>
</div>

{{-- <v-map></v-map> --}}
{{--<div id="sidebar" class="sidebar collapsed">
    <!-- Nav tabs -->
    <div class="sidebar-tabs">
        <ul role="tablist">
            <li>
                <a href="#home" role="tab" alt="info" title="Was ist das hier und wie pflege ich die Daten?">&#9776;</a>
            </li>
        </ul>

        <ul role="tablist">
            <li>
                <a href="#info" role="tab" alt="i" title="Impressum und Datenschutz">&#8505;</a>
            </li>
            <li>
                <a href="https://github.com/CodeforKarlsruhe/direktvermarkter" role="tab" target="_blank"
                    rel="noopener">
                    <img width="20px" style="padding-top: 8px;" margin-top="5px" src="img/github.svg" alt="Github"
                        title="Repository auf Github.com">
                </a>
            </li>
            <li>
                <a href="https://codefor.de/" target="_blank" rel="noopener" role="tab">
                    <img width="25px" style="padding-top: 8px;" src="img/okfnde.png" alt="ok lab"
                        title="Code for Germany - eine Initiative von der Open Knowledge Foundation Germany">
                    </i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Tab panes -->
    <div class="sidebar-content">
        <div class="sidebar-pane" id="home">
            <h1 class="sidebar-header">
                farmshops.eu - Direktvermarkter-Karte
                <span class="sidebar-close"></span>
            </h1>
            <h3>Was ist das hier?</h3>

            <p>farmshops.eu ist eine Übersichtskarte, die Dir hilft die Adressen von Wochenmärkten, Hofläden,
                bäuerlichen Milch, -Eier- oder Essensautomaten und vielen anderen lokalen Direktvermarktern in
                Deiner Region zu finden.
                Die Karte basiert auf den Daten von
                <a href="https://www.openstreetmap.org" target="_blank" rel="noopener">openstreetmap.org</a> und
                bereitet die Einträge optisch auf. Fehlende oder neue Daten
                kann man direkt auf OpenStreetMap eintragen. Die Informationen werden von dort regelmäßig
                abgeglichen.
            </p>

            <h3>Ich habe fehlende oder falsche Daten, wo kann ich die eintragen?</h3>

            <p>
                Alle Daten stammen von <a href="https://www.openstreetmap.org" target="_blank"
                    rel="noopener">openstreetmap.org</a>. Es gibt zwei Möglichkeiten neue Orte einzutragen:
            <p>
                <a href="https://openstreetmap.org" target="_blank" rel="noopener" class="button">Auf OSM
                    bearbeiten</a>
                <br>(Login notwendig)
            </p>
            <p>
                <a href="./contribute/index.html" class="button">Eintrag Vorschlagen</a>
                <br>(ohne Login möglich, erfahrene Mapper tragen die Daten für Dich ein. <a
                    href="https://ent8r.github.io/NotesReview/?query=farmshops.eu&limit=100&start=true&map=6%2F50.7990%2F12.2168"
                    target="_blank" rel="noopener">Hier findest Du alle unbearbeiteten Vorschläge</a>.)
            </p>
            <p>

            </p>
            </table>
            <p>
            <h3>Welche Einträge von Openstreetmap werden hier angezeigt?</h3>
            <p>Nur Orte mit folgenden Tags werden überhaupt angezeigt:</p>
            <p>
                <img src="img/h-pin2.png" alt="" style="width:100%; max-width: 40px;">
                <a href="https://wiki.openstreetmap.org/wiki/DE:Tag:shop%3Dfarm" target="_blank"
                    rel="noopener">shop=farm </a>für Hofläden und Direktvermarkter aller Art
            </p>
            <p>
                <img src="img/a-pin2.png" alt="" style="width:100%; max-width: 40px;">
                <a href="https://wiki.openstreetmap.org/wiki/DE:Tag:amenity%3Dvending_machine" target="_blank"
                    rel="noopener">amenity=vending_machine</a> für Verkaufsautomaten, jedoch nur mit:
            <ul>
                <li>
                    <a href="https://wiki.openstreetmap.org/wiki/Tag:vending%3Dfood" target="_blank"
                        rel="noopener">vending=food</a> Für Essen
                </li>
                <li>
                    <a href="https://wiki.openstreetmap.org/wiki/Tag:vending%3Dmilk" target="_blank"
                        rel="noopener">vending=milk</a> Für Milchautomaten
                </li>
                <li>Außerdem auch die vending-Einträge: eggs, tomatoes, cheese, sausages, potatoes, noodles,
                    meat, honey, fruits</li>
                <li>Man kann auch mehrere angebotene Waren kombinieren, z.B.
                    <i>vending=eggs;sausages;vegetables;cheese</i>
                </li> uvm.
            </ul>
            </p>
            <p>
                <img src="img/m-pin2.png" alt="" style="width:100%; max-width: 40px;">
                <a href="https://wiki.openstreetmap.org/wiki/DE:Tag:amenity=marketplace" target="_blank"
                    rel="noopener">amenity=marketplace</a> für Wochenmärkte
            </p>

            <p>
                <img src="img/b-pin.png" alt="" style="width:100%; max-width: 40px;">
                <a href="https://wiki.openstreetmap.org/wiki/DE:Tag:craft%3Dbeekeeper" target="_blank"
                    rel="noopener">craft=beekeeper</a> für Imker
            </p>


            <p>Von all diesen Orte werden falls vorhanden alle weiteren Daten wie die Adresse oder die
                Öfnungszeiten
                im Popup angezeigt, wobei unbekante Tags in der Tabelle landen und teilweise Begriffe übersetzt
                werden.</p>
            <p>Folgende Tags werden im Popup formatiert dargestellt:</p>

            <p>
                <img src="img/popupbeispiel.png" style="width:100%; max-width: 300px;" alt="">
            </p>

            <br>
            Öffnungszeiten werden im <a
                href="https://wiki.openstreetmap.org/wiki/DE:Key:opening_hours#.C3.96ffnungszeiten_f.C3.BCr_Ulm.2C_Neu-Ulm_.26_Umgebung"
                target="_blank" rel="noopener">Openstreetmap-Format</a> angezeigt. Darunter findet man einen
            grünen oder roten Text der angibt, ob die Einrichtung im Moment offen oder geschlossen ist. Jedoch
            werden Öffnungszeiten momentan nur ausgewertet, wenn sie keine (länderspezifischen) Schulferien
            enthalten.
            </p>
            <p>
            <h3>Wie häufig werden die Daten abgeglichen und welchen Stand haben sie jetzt gerade?</h3>
            Momentan werden die Daten mit
            <a href="https://github.com/CodeforKarlsruhe/direktvermarkter/blob/master/update_data.js" target="_blank"
                rel="noopener">einem Script</a> manuell in regelmäßigen Abständen&#8482;
            abgeglichen. Ein automatischer Abgleich ist
            geplant.
            <p>
                <script>
                    document.write(lastUpdate);
                </script>
            </p>
            </p>
            <p>
            <h3>Wie erreiche ich euch?</h3>
            <ul>
                <li>Auf der Webseite von
                    <a href="https://codefor.de/karlsruhe/">Code for Karlsruhe</a> gibt es Kontaktdaten und
                    Infos zu den regelmäßigen Treffen.
                </li>
                <li>Den Quellcode und technische Planung gibt es auf
                    <a href="https://github.com/CodeforKarlsruhe/direktvermarkter" target="_blank"
                        rel="noopener">GitHub</a>
                </li>
                <li>Für generelle Fragen kann man eine Mail an
                    <a href="mailto:farmshops@posteo.eu">farmshops@posteo.eu</a> schreiben.
                </li>
                <li>
                    <a href="http://stefan.grotz.me/" target="_blank" rel="noopener">Stefan Grotz</a>
                    koordiniert das Projekt und kann auch direkt angeschrieben werden.
                </li>
            </ul>
            </p>
            <p>
            <h3>Was gibt es für verwandte Projekte?</h3>
            Folgende Seiten könnten für Nutzer dieser Seite auch interessant sein:
            <p>
            <ul>
                <li>Genaue Daten zu Wochenmärkten findet man bequem für viele Städte auf
                    <a href="https://wo-ist-markt.de" target="_blank" rel="noopener">wo-ist-markt.de</a>.
                </li>
                <li>Kräuter und andere öffentlich zugängliche Nahrungsmittel findet man auf
                    <a href="https://mundraub.org/" target="_blank" rel="noopener">mundraub.org</a>
                </li>
                <li>Bei <a href="https://marktschwaermer.de/de" target="_blank" rel="noopener">
                        Marktschwärmer/Food Assembly</a> organisieren sich Kunden und bestellen als Gruppe bei
                    regionalen Erzeuger.</li>
            </ul>
            </p>

        </div>

        <div class="sidebar-pane" id="info">
            <h1 class="sidebar-header">Impressum und Datenschutz
                <span class="sidebar-close"></span>
            </h1>

            <img src="img/codeforkarlsruhe.png" alt="Logo Code for Karlsruhe" width="200px"
                style="display: block;margin-left: auto;margin-right: auto">
            <p>
                <strong>farmshops.eu</strong> ist ein Projekt von
                <a href="https://codefor.de/karlsruhe/" target="_blank" rel="noopener">Code for Karlsruhe</a>.
                Die Karte bereitet Daten von Openstreetmap optisch auf und hilft bei der Pflege.
            </p>
            <p> Diese Seite befindet sich momentan noch im Aufbau, ein ausführlicheres Impressum folgt bald.
                <br> Kontakt:
                <a href="mailto:farmshops@posteo.eu">farmshops@posteo.eu</a>
            </p>
            <h2>Copyright</h2>
            <p>Die Karte selbst steht unter einer MIT Lizenz und der Quellcodde ist auf Github zu finden.</p>
            <p>Die Icons auf der Karte stehen unter der Creative Commons CCBY und wurden an den Rändern leicht
                beschnitten.
            <ul>
                <li>Der Bauernhof Icon ist von Nociconist erstellt
                    <a href="https://thenounproject.com/icon/1549496/#">Mehr Informationen zum Icon bei the noun
                        project</a>
                </li>
                <li>Das Automaten-Icon wurde von Ben Davis erstellt
                    <a href="https://thenounproject.com/icon/909556/#">Mehr Informationen zum Icon bei the noun
                        project </a>
                </li>
                <li>Das Markt-Icon wurde von İsmail Nural erstellt
                    <a href="https://thenounproject.com/icon/195153/#">Mehr Informationen zum Icon bei the noun
                        project </a>
                </li>
                <li>Das Imnker-Icon wurde von Mello erstellt
                    <a href="https://thenounproject.com/icon/2093276/#">Mehr Informationen zum Icon bei the noun
                        project </a>
                </li>
            </ul>
            <p>
            <h2>Datenschutz</h2>
            Wir speichern keinerlei Daten über unsere Benutzer und erheben keine Statistik über die Zugriffe und
            speichern soweit möglich
            alle Abhängigkeiten auf dem eigenen Server.
            <p>Folgende externe Anbieter werden u.U. beim Aufruf der Seite angesprochen: </p>
            <ul>
                <li>Die Seite ist auf den Servern von github.com gehostet.</li>
                <li>Die Karten im Hintergrund werden von folgenden Servern gezogen:
                    <ul>
                        <li>maps.wikimedia.org (Standardeinstellung)</li>
                        <li>tile.openstreetmap.org (Openstreetmap Optik)</li>
                        <li>server.arcgisonline.com/ (Satelitenbild)</li>
                    </ul>
                </li>
                <li>Es werden die Suchstatistiken von Google, Bing und Yandex ausgewertet, die jedoch komplett
                    anonymisiert
                    sind.</li>
                <li>Die auf der Karte angezeigten Daten stammen von Openstreetmap und dürfen nur öffentlich
                    zugängliche
                    Daten enthalten. Falls in diesen Datenbestand sensible oder geschützte Daten auftauchen
                    löschen
                    wir diese nach Kenntnissnahme natürlich sofort aus dieser Webseite und helfen darüber hinaus
                    gerne dabei diese aus den Datenbestand von OSM zu löschen. Siehe dazu auch die
                    <a href="https://wiki.openstreetmap.org/wiki/DE:Datenschutz">Datenschutzbestimmungen von
                        Openstreetmap</a>
                </li>
            </ul>
            </p>
            </p>
        </div>
    </div>
</div>--}}


@endsection
@push('scripts_before')
<script src="data/farmshopGeoJson.js"></script>
@endpush