<template>
	<div class="result-content--wrapper">
		<div class="row">
			<div v-for="(item, index) in items" :key="index" class="col-sm-12-5">
				<div class="result-content--card">
					<div class="result-content--front" @click="flipOpen">
						
					</div>
					<div class="result-content--back" @click="flipClose">
						<h5>{{item.account}}</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<style lang="css">
	.col-sm-12-5{
		width: 20%;
		padding: 0 10px;
	}
	.result-content--wrapper{
		margin: 40px 0;
	}
	.result-content--card{
		margin: 20px 0;
		transition: 0.6s;
    	transform-style: preserve-3d;
    	position: relative;
		width: 100%;
		height: 30vh;
	}
	.result-content--card.active{
		transform: rotateY(180deg);
	}
	.result-content--back, .result-content--front{
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
	.result-content--back{
		background: red;
		transform: rotateY(180deg);
	}
	.result-content--front{
		background: blue;
		z-index: 2;
    	transform: rotateY(0deg);
	}
</style>


<script>
export default {
	data(){
		return {
			items : []
		}
	},
	mounted(){
		for (let index = 0; index < 10; index++) {
			this.items.push({
				id: index,
				account: '@instagram_name_'+index
			})
		}
	},
	methods: {
		flipOpen(val){
			val.target.parentNode.classList.add('active')
		},
		flipClose(val){
			val.target.parentNode.classList.remove('active')
		}
	}
}
</script>
