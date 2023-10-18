@extends("user.layout")

@section("main")

<style>
    .about {
  padding: 130px 0;
}

.about .heading h2 {
  font-size: 30px;
  font-weight: 700;
  margin: 0;
  padding: 0;

}

.about .heading h2 span {
  color: red;
}

.about .heading p {
  font-size: 15px;
  font-weight: 400;
  line-height: 1.7;
  color: #999999;
  margin: 20px 0 60px;
  padding: 0;
}

.about h3 {
  font-size: 25px;
  font-weight: 700;
  margin: 0;
  padding: 0;
}

.about p {
  font-size: 15px;
  font-weight: 400;
  line-height: 1.7;
  color: #999999;
  margin: 20px 0 15px;
  padding: 0;
}

.about h4 {
  font-size: 15px;
  font-weight: 500;
  margin: 8px 0;
}

.about h4 i {
  color: red;
  margin-right: 10px;
}

#zoom {
  padding: 50px;
  /* background-color: green; */
  transition: transform .5s;
  /* width: 600px;
  height: 600px; */
  /* margin: 0 auto; */
}

#zoom:hover {
  -ms-transform: scale(1.1);
  /* IE 9 */
  -webkit-transform: scale(1.1);
  /* Safari 3-8 */
  transform: scale(1.1);
}
</style>


<section class="about" id="about">
    <div class="container1">
      <div class="heading text-center">
        <h2>About
          <span>Us</span>
        </h2>
        <p>Step into a world where the allure of beauty meets the enchantment of adornment.
          <br>
          Our cosmetic jewelry collection is a celebration of elegance and sophistication, designed to empower you with confidence and charm.
          <br>
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6" id="zoom">
          <img src="/img/categories/7a224989464359a0e8b62fe332e65736.jpg" style="border-radius: 20px;" alt="..." class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h3>Enhance Your Natural Beauty with Our Premium Cosmetics Range.</h3>
          <p>"Each product is meticulously crafted to enhance your natural beauty, offering a range of exquisite cosmetics that allow you to express your individuality. Whether it's the subtle radiance of our foundations or the bold statement of our lipsticks, every cosmetic item is a stroke of artistic perfection. Complement your look with our jewelry pieces, each carefully selected to add a touch of glamour and finesse. </p>
          <div class="row">
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>Enhanced Glamour
              </h4>
            </div>
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>
                Time-Saving Elegance
              </h4>
            </div>
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>Self-Expression
              </h4>
            </div>
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>
                Personalized Beauty
              </h4>
            </div>
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>Endless Combinations
              </h4>
            </div>
            <div class="col-md-6">
              <h4>
                <i class="fa fa-star"></i>

                Confidence and Poise
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection