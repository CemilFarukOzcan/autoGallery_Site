const slaytContainers = document.querySelectorAll('.slayt-container');

    slaytContainers.forEach((container) => {
      const slaytlar = container.querySelectorAll('.slayt');
      let aktifSlaytIndex = 0;

      function gosterSlayt(index) {
        slaytlar.forEach((slayt) => slayt.classList.remove('aktif'));
        slaytlar[index].classList.add('aktif');
      }

      function sonrakiSlayt() {
        aktifSlaytIndex++;
        if (aktifSlaytIndex >= slaytlar.length) {
          aktifSlaytIndex = 0;
        }
        gosterSlayt(aktifSlaytIndex);
      }

      setInterval(sonrakiSlayt, 3000); // Her 3 saniyede bir slaytı değiştirin
    });