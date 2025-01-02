<style>
.card__img img {
  width: 100%;
  display: block;
  height: 100%;
  object-fit: cover;
}

h2 {
  font-size: clamp(1rem, 0.8750rem + 0.6250vw, 1.5rem);
  line-height: 1.3;
  font-weight: 700;
}

.fullcard {
  display: grid;
  grid-template-columns: 25% 30% 15% 25%;
  gap: 15px;
  place-content: center;
  grid-template-rows: 50% 50%;
  height: 80vh;
  min-height: 460px;
  padding: max(2vh, 1.5rem);
}
@media screen and (max-width: 690px) {
  .fullcard {
    height: 65vh;
  }
}
@media screen and (max-width: 470px) {
  .fullcard {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(3, 35%);
  }
}
.fullcard .card {
  border-radius: 10px;
  /* box-shadow: -2px 4px 15px rgba(0, 0, 0, 0.26); */
}
@media screen and (max-width: 470px) {
  .fullcard .card {
    grid-column: span 1;
  }
}
.fullcard .card:nth-child(2) {
  grid-column: 2/3;
  grid-row: span 2;
}
@media screen and (max-width: 690px) {
  .fullcard .card:nth-child(2) {
    grid-column: span 1;
    grid-row: span 1;
  }
}
.fullcard .card:nth-child(3) {
  grid-column: span 2;
}
@media screen and (max-width: 690px) {
  .fullcard .card:nth-child(3) {
    grid-column: 2/4;
    grid-row: 1/2;
  }
}
@media screen and (max-width: 690px) {
  .fullcard .card:nth-child(6) {
    grid-column: 2/4;
    grid-row: 2/3;
  }
}
@media screen and (max-width: 470px) {
  .fullcard .card:nth-child(5) {
    grid-column: span 2;
  }
}
.fullcard .card p {
  font-size: clamp(0.9rem, 0.8750rem + 0.1250vw, 1rem);
  line-height: 1.4;
}
.fullcard .card img {
  border-radius: 10px;
}
.fullcard .card .card__img {
  position: relative;
  height: 100%;
}
.fullcard .card .card__img .card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  content: "";
  color: #fff;
  padding: clamp(0.938rem,5vw,1.563rem);
  background: #02022e;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.57) 0%, rgba(255, 255, 255, 0) 100%);
  width: 100%;
  height: 100%;
  border-radius: 25px;
  display: flex;
  justify-content: flex-end;
  flex-direction: column;
}
.fullcard .card .card__img span {
  position: absolute;
  top: 25px;
  left: min(2vmax, 1.563rem);
  color: #ff7b29;
  background: #fff;
  border-radius: 50px;
  padding: 2px 8px 2px 6px;
  display: flex;
  box-shadow: 0px 1px 20px #0000002b;
}
@media screen and (max-width: 690px) {
  .fullcard .card .card__img span {
    top: 20px;
  }
}
@media screen and (max-width: 470px) {
  .fullcard .card .card__img span {
    top: 15px;
  }
}
.fullcard .card .card__img span svg {
  fill: #ff7b29;
  width: 20px;
  margin-right: 2px;
}

</style>


<div class="fullcard" style="margin-top:20px;margin-bottom:20px;">
<div class="card">
  <div class="card__img">
    <img
      src="https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/25269482/2024/9/26/c594ea00-d9f2-41ed-92db-11738aa196881727354264569-Red-Tape-Men-Slip-Resistant-Surface-Grip-Running-Shoes-85717-1.jpg"
      alt="Big Ben">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>4.5</span>
    <div class="card__overlay">
      <h2>London</h2>
      <p>Big Ben</p>
    </div> -->
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img
      src="https://i.pinimg.com/736x/29/4d/7a/294d7a2c19a34d799c24ea7b0fd68d89.jpg"
      alt="Eiffel Tower">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>5</span>
    <div class="card__overlay">
      <h2>Paris</h2>
      <p>Eiffel Tower</p>
    </div> -->
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img
      src="https://www.biba.in/on/demandware.static/-/Sites-biba-product-catalog/default/dwd98b032f/images/aw23/hbgwhitbag00054aw23blk_1.jpg"
      alt="Colosseum">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>4.7</span>
    <div class="card__overlay">
      <h2>Rome</h2>
      <p>Colosseum</p>
    </div> -->
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img
      src="https://manyavar.scene7.com/is/image/manyavar/CLBAG313-421-411-BEIGE-PISTA.28044_12-06-2024-11-55:650x900"
      alt="Pisa Tower">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>4.3</span>
    <div class="card__overlay">
      <h2>Pisa</h2>
      <p>Pisa Tower</p>
    </div> -->
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img
      src="https://i.pinimg.com/236x/60/03/8d/60038df1d754ce5c09dadfd4e07da6d8.jpg"
      alt="">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>4.8</span>
    <div class="card__overlay">
      <h2>New York</h2>
      <p>Statue of Liberty</p>
    </div> -->
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img
      src="https://media.istockphoto.com/id/1471478286/photo/black-millennial-spouses-hanging-poster-on-wall-together-at-home.jpg?s=612x612&w=0&k=20&c=vxhAeNcvyR51jyyVoJOx7qVV1TlY7o5v8sYgizdfusA="
      alt="Sydney Opera House">
    <!-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
      </svg>5</span>
    <div class="card__overlay">
      <h2>Sydney</h2>
      <p>Sydney Opera House</p>
    </div> -->
  </div>
</div>

</div>