<template>
  <div class="result-content--wrapper">
    <div class="row">
      <div v-for="(item, index) in items" :key="index" class="col-sm-12-5">
        <div class="result-content--card">
          <div class="result-content--front" @click="flipOpen">
            <!-- <img src="../../../public/card-front.svg" alt=""> -->
          </div>
          <div :id="index" class="result-content--back" @click="flipClose">
            <h4>@{{ item.instagram }}</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="css">
.col-sm-12-5 {
    width: 20%;
    padding: 0 10px;
}

.result-content--wrapper {
    margin: 40px 0;
}

.result-content--card {
    margin: 20px 0;
    transition: 0.6s;
    transform-style: preserve-3d;
    position: relative;
    width: 100%;
    height: 30vh;
}

.result-content--card.active {
    transform: rotateY(180deg);
}

.result-content--back,
.result-content--front {
    width: 100%;
    height: 30vh;

    font-weight: 700;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
}

.result-content--back {
    background: #EC2329;
    transform: rotateY(180deg);
}

.result-content--back h4{
	overflow-wrap: break-word;
	word-wrap:break-word;
	word-break: break-all;
	text-align: center;
	font-family: 'proxima-nova', 'Arial', sans-serif;
	font-weight: 700;
	font-size: 2em;
}

.result-content--front {
    background-color: white;
    background-image: url('../../../public/card-front.png');
    background-size: cover;
    z-index: 2;
    transform: rotateY(0deg);
}
</style>

<script>
export default {
  data() {
    return {
      data: [],
      items: [],
      key: []
    }
  },
  watch: {
    data() {
      for (let index = 0; index < 10; index++) {
        const rand = this.getRandomInt(0, this.data.length)
				this.key.push(rand)
				this.items.push(this.data[rand])
			}
    }
  },
  mounted() {
    const that = this
		function reqListener() {
      that.data = JSON.parse(this.responseText).data
		}
    let oReq = new XMLHttpRequest()
		oReq.addEventListener('load', reqListener)
		oReq.open('GET', '/api/result')
		oReq.send()
    },
  methods: {
    flipOpen(val) {
      val.target.parentNode.classList.add('active')
    },
    flipClose(val) {
      val.target.parentNode.classList.remove('active')
      if (Number.isInteger(parseInt(val.target.id))) {
        let rand = 0
        let flag = true
        while (flag) {
          rand = this.getRandomInt(0, this.items.length)
          if (this.key.indexOf(rand) == -1) {
            flag = false
          }
        }
        const that = this
        setTimeout((e) => {
          that.items.splice(val.target.id, 1, that.data[rand])
          that.key.splice(val.target.id, 1, rand)
        }, 200)
      }
    },
    getRandomInt(min, max) {
      min = Math.ceil(min)
      max = Math.floor(max)
      return Math.floor(Math.random() * (max - min)) + min // The maximum is exclusive and the minimum is inclusive
    }
  }
}
</script>
