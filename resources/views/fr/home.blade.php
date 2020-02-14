@extends('fr.layouts.app')

@section('title', config('app.name'))

@section('content')
<div id="a-propos" class="welcome">
    <div class="container">
        <div class="welcome-info">
            <h2>Bienvenue sur MIPOGG</h2>
            <p>&laquo; McGill Interactive Pediatric OncoGenetic Guidelines &raquo; (MIPOGG) identifie les syndromes de prédisposition au cancer en oncologie pédiatrique.</p>
            <p>Les syndromes de prédisposition au cancer sont reconnus en tant que cause importante de développement des cancers en ce qui a trait aux patients d'âge pédiatrique. Les oncologues et professionnels de la santé qui suivent des enfants et des adolescents avec des cancers ont une opportunité unique d'identifier ces patients et leur famille pour une évaluation génétique. Cette tâche est de plus en plus complexe pour les cliniciens comme notre connaissance des cancers génétiques croît rapidement. L'équipe MIPOGG a décidé de relever ce défi pour vous.</p>
            <p>MIPOGG donne accès à des algorithmes simples, spécifiques aux tumeurs, qui aident le clinicien tout au long du processus décisionnel afin de déterminer si un enfant nécessite une évaluation en génétique. MIPOGG inclus des modules éducatifs basés sur des preuves, qui soulignent les liens entre les tumeurs chez les patients d'âge pédiatrique et les syndromes de prédisposition au cancer.</p>
            <p>Nous espérons que vous le trouverez utile!</p>
            <p>L'équipe MIPOGG</p>
        </div>
        <div class="welcome-background">
            <img class="welcome-image" src="/images/welcome.png" alt="">
        </div>
    </div>
</div>
<div id="telecharger" class="download-app">
    <div class="container">
        <div class="download-app-wrapper">
            <div class="download-app-info">
                <h2>Télécharger l'application</h2>
                <p>Télécharger l'application sur le App Store ou Google Play.</p>
            </div>
            <div class="download-app-images">
                <ul>
                    <li><a href="https://apps.apple.com/ca/app/mipogg/id1482275796" target="_blank"><img src="/images/app_store_logo.png" alt=""></a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.mipogg.app&hl=en" target="_blank"><img src="/images/google_play_logo.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="partenaires" class="our-partners">
    <div class="container">
        <div class="our-partners-info">
            <h2>Nos partenaires</h2>
            <ul>
                <li><a href="https://fondationduchildren.com" target="_blank"><img src="/images/partners/p1.png"></a></li>
                <li><a href="https://sarahsfund.ca" target="_blank"><img src="/images/partners/p2.png"></a></li>
                <li><a href="http://www.sickkids.ca/gfcc/" target="_blank"><img src="/images/partners/p3.png"></a></li>
                <li><a href="https://www.charlesbruneau.qc.ca" target="_blank"><img src="/images/partners/p4.png"></a></li>
                <li><a href="https://www.pogo.ca" target="_blank"><img src="/images/partners/p5.png"></a></li>
                <li><a href="https://www.hopitalpourenfants.com" target="_blank"><img src="/images/partners/p6.png"></a></li>
                <li><a href="http://www.sickkids.ca" target="_blank"><img src="/images/partners/p7.png"></a></li>
                <li><a href="https://www.chusj.org" target="_blank"><img src="/images/partners/p8.png"></a></li>
                <li><a href="https://mcgill.ca" target="_blank"><img src="/images/partners/p9.png"></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="contact" class="contact-us">
    <div class="contact-us-map">
        <div class="contact-us-container">
            <div class="contact-us-info">
                <h2>Contactez-nous</h2>
                {{-- <div class="contact-us-tel">
                    <a href="tel:514.000.0000">514.000.0000</a>
                </div>
                <div class="contact-us-location">
                    <p>0000 rue, Suite 100</p>
                    <p>Saint-Laurent (Qc) Canada</p>
                    <p>H0H 0Z0</p>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="contact-us-form">
        <div class="contact-us-container">
            <form action="">
                <div class="form-row">
                    <div class="form-label">
                        <label for="name">*Prénom</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="first_name" name="first_name"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="name">*Nom</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="last_name" name="last_name"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="email">*Courriel</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="email" name="email"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="message">*Message</label>
                    </div>
                    <div class="form-input">
                        <textarea id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <button type="submit">ENVOI</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
