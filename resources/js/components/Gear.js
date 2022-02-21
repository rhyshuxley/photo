import { React, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';
import GearItem from './GearItem';

const Gear = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    Axios.get('/api/get-gear')
      .then(res => {
        setData(res.data)
      })
  }, [])

  return (
    <div>
      {data.map((item) =>
        <GearItem data={item} key={item.id}/>
      )}
    </div>
  );
}

export { GearItem };
export default Gear;

if (document.getElementById('gear')) {
    ReactDOM.render(<Gear />, document.getElementById('gear'));
}