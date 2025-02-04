import { useEffect, useState } from 'react';
import './App.css'

function App() {
const [message, setMessage] = useState('');
useEffect(() => {
fetch('/api/LMH')
.then((res) => res.json())
.then((data) => setMessage(data.fraseLMH));
}, []);
return (
<div>
<h1>Frontend en React de Luis Maldonado Hernandez</h1>
<p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
<p>respuesta del Backend: {message || 'Cargando la BD...'}</p>
</div>
);
}
export default App;