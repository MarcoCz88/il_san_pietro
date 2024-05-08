<x-layout>
    <x-slot name="title">
         Il San Pietro | Prodotti
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 bebas-neue-regular">I Nostri Prodotti</h1>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/prodotti3.jpg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6">
                <p><strong>Prodotti Freschi:</strong> Il ristorante utilizza esclusivamente ingredienti freschi e di stagione per garantire il massimo sapore e valore nutrizionale nei piatti. Gli ingredienti freschi sono spesso più gustosi e offrono una migliore esperienza culinaria.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/prodotti2.jpeg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6 order-md-1">
                <p><strong>Prodotti a Chilometro Zero:</strong> Il concetto di chilometro zero indica che gli ingredienti sono ottenuti da fornitori locali, riducendo al minimo il trasporto e l'impatto ambientale associato. Ciò promuove la sostenibilità, supporta i produttori locali e garantisce ingredienti freschi.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('images/prodotti1.jpeg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6">
                <p><strong>Alta Qualità:</strong> Il ristorante si impegna a utilizzare solo ingredienti di altissima qualità per offrire piatti deliziosi e soddisfacenti ai suoi clienti. La selezione accurata degli ingredienti è fondamentale per la creazione di piatti raffinati e gustosi.</p>
            </div>
        </div>
    </div>
</x-layout>