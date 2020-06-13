@extends('layouts.main')

@section('content')
    <section class="Faq">
        <header class="Faq-header mb-10">
            <h1 class="mb-5">Domande frequenti</h1>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
        </header>
        <div class="Faq-questions u-flex u-justifyBtw">
            <div class="Questions Questions--before">
                <div class="Questions-header mb-7">
                    <h2>Prima del corso</h2>
                </div>
                <div class="Questions-list">
                    <ul>
                        <li>Chi può fare il corso Boolean?</li>
                        <li>Che competenze devo avere per iniziare il corso?</li>
                        <li>In cosa consiste il processo di selezione?</li>
                        <li>Posso seguire il corso mentre lavoro o studio?</li>
                    </ul>
                </div>
            </div>
            <div class="Questions Questions--after">
                <div class="Questions-header mb-7">
                    <h2>Dopo il corso</h2>
                </div>
                <div class="Questions-list">
                    <ul>
                        <li>Ho la certezza di essere assunto?</li>
                        <li>Terminato il corso, sono supportato nella ricerca del lavoro?</li>
                        <li>Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?</li>
                        <li>Posso fare lo sviluppatore freelance al termine del corso?</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection