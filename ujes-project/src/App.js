import './App.css';

import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Client from './components/Client';
import About from './components/About';
import Service from './components/Service';

function App() {
  return (
    <div className="App">
    <Navbar/>
    <Hero/>
    <Client/>
    <About/>
    <Service/>
    </div>
  );
}
export default App;


