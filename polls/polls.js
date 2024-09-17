const form = document.getElementById('poll-form');
const resultsDiv = document.getElementById('poll-results');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent page reload on form submission

  const selectedColor = document.querySelector('input[name="color"]:checked');
  if (selectedColor) {
    const colorValue = selectedColor.value;
    const pollResults = JSON.parse(localStorage.getItem('pollResults')) || {};
    pollResults[colorValue] = (pollResults[colorValue] || 0) + 1;
    localStorage.setItem('pollResults', JSON.stringify(pollResults));
    showResults();
  }
});

function showResults() {
  const pollResults = JSON.parse(localStorage.getItem('pollResults')) || {};
  const totalVotes = Object.values(pollResults).reduce((a, b) => a + b, 0);
  let html = '';
  for (const color in pollResults) {
    const count = pollResults[color];
    const percentage = ((count / totalVotes) * 100).toFixed(2);
    html += `<div>${color}: ${count} votes (${percentage}%)</div>`;
  }
  resultsDiv.innerHTML = html;
}
