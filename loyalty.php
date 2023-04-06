<?php

class Loyalty {
  // Quando un utente si registra, viene creato un oggetto Loyalty
  // in questo anno l'utente potrà accumulare punti.
  // Esistono degli scaglioni basati su una quantità di punti che permetto di ottenere dei sconti.
  // Per esempio poniamo che gli scaglioni siano:
  // 0 punti: nessuno sconto
  // 100 punti: 10% di sconto
  // 200 punti: 20% di sconto
  // 300 punti: 30% di sconto
  // Ecc...
  //
  // Ogni volta che viene raggiunto un nuovo scaglione, partirà un nuovo anno (resettando quello precedente).
  //
  // Se durante l'anno l'utente non raggiunge lo scaglione successivo, verrà resettato lo status dell'utente in base al numero di punti accumulati durante quest'ultimo.
  //
  // Per esempio, se un utente accumula 150 punti, ma non raggiunge lo scaglione successivo, allora l'utente avrà uno status di 50 punti.
}
