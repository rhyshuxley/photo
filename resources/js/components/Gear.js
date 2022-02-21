import { React, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
// import Axios from 'axios';
import GearItem from './GearItem';

const Gear = () => {
  // const [data, setData] = useState([]);

  // useEffect(() => {
  //   Axios.get('/api/get-main')
  //     .then(res => {
  //       console.log(res.data)
  //       setData(res.data)
  //     })
  // }, [])

  const data = [
    {
      'id': 1,
      'name': 'Canon 90D',
      'photo': "/images/gear/IMG_8293.jpg",
      'classes': 'd-flex flex-row',
    },
    {
      'id': 2,
      'name': 'Sigma 18-50mm f2.8',
      'photo': "/images/gear/IMG_8296.jpg",
      'classes': 'd-flex flex-row-reverse',
    }
  ];
  
  return (
    <div>
      {data.map((item) =>
        <GearItem data={item}/>
      )}
    </div>
  );
}

export { GearItem };
export default Gear;

if (document.getElementById('gear')) {
    ReactDOM.render(<Gear />, document.getElementById('gear'));
}