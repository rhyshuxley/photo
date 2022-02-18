import { React, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';
import Gallery from './Gallery';

const Home = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    Axios.get('/api/get-main')
      .then(res => {
        console.log(res.data)
        setData(res.data)
      })
  }, [])
  
  return (
    <div>
        <Gallery photos={data} direction="row" margin="3" targetRowHeight="400"/>
    </div>
  );
}

export default Home;

if (document.getElementById('gallery')) {
    ReactDOM.render(<Home />, document.getElementById('gallery'));
}