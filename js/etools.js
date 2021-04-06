const app = express();
app.get('/api', request, response)
{
  response.json({test:123});
}


getData();
async function getData() {
  const response = await fetch('');
  const data = await response.json();
  console.log(data);
}