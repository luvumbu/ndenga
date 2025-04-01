<script>
    class CountdownTimer {
    constructor(dateString, index) {
        this.targetDate = new Date(dateString).getTime();
        this.index = index;
        this.containerElement = document.getElementById(`countdown-${index}`);
        this.updateCountdown();
        setInterval(() => this.updateCountdown(), 1000);
    }

    updateCountdown() {
        const now = new Date().getTime();
        let distance = this.targetDate - now;

        if (distance < 0) {
            // Temps écoulé : appliquez la couleur de fond rgba(200, 0, 0, 0.3)
            this.containerElement.style.backgroundColor = 'rgba(200, 0, 0, 0.2)';
            distance = Math.abs(distance); // Pour afficher les valeurs positives
        }

        const years = Math.floor(distance / (1000 * 60 * 60 * 24 * 365));
        const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById(`years-${this.index}`).innerText = years;
        document.getElementById(`days-${this.index}`).innerText = days;
        document.getElementById(`hours-${this.index}`).innerText = hours;
        document.getElementById(`minutes-${this.index}`).innerText = minutes;
        document.getElementById(`seconds-${this.index}`).innerText = seconds;
    }
}

const events = <?php echo json_encode(array_keys($events)); ?>;

function startCountdowns() {
    events.forEach((dateStr, index) => {
        new CountdownTimer(dateStr, index);
    });
}

startCountdowns();
</script>