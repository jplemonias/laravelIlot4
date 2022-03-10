@extends('mainTemplate')

@section('title', 'Mon Panier')

@section('content')
    <div class="container">
        <h2>Mon Panier</h2>
        <br>
        <div class="cartTitles">
            <p>PRODUIT</p>
            <div class="quantityPrices">
                <p>PRIX UNITAIRE</p>
                <p>QUANTITÉ</p>
                <p>PRIX TOTAL</p>
            </div>
        </div>
        <div class="products">
            <div class="product">
                <button>x</button>
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBISEBIVEBUVFRUVFRUSFRAQFRAVFRUWFxUVFRUYHiggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQGC0dHSAtLS0tLS0rLSsrLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLSstLSs3KysrLSstLf/AABEIALQBGQMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAwECBAUGBwj/xABEEAACAgEBBAcDCQUECwAAAAAAAQIDEQQFEiExBgcTQVFhcVKBkRQiMkKSobHB0SNTYoLhFYOi8BYXJDNDY3Jzk7Lx/8QAGAEBAAMBAAAAAAAAAAAAAAAAAAECAwT/xAAkEQEBAQACAgIDAAIDAAAAAAAAAQIDERMxEiEUQVFicQQyYf/aAAwDAQACEQMRAD8A9xAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABqdsdJdJpV/tF8K37LeZP+VZZwG3OuWmL3dJU7H7VmYr3QXF+/AHqoPANX1lbUt+jJUr+GNcMe+WWa63pptD6+unHyUn+SQH0gD5p/0y1/OGunJ+DsnD4dxmaPrE2pB/77f8pyqn+Kz94H0UDxDSdcGpg18opXqlu/DmvvOn2Z1taWz6ea3/Enj4rJFvSZO3pANFoOlFFyzCSn/wBEoy+7mZ8dp1vva9U0V+ef6n4a/jOBBDVQfKSfvRMpFu0dWKgDJKAEd10YLenJRXe5NRS97Oe1nT3ZlTxPWVZXdFuz/wBUwOlBzmz+nezb3u16yrPhKXZt/awdDCaaTTTT5NcUwLgAAAAAAAAAABzfTHpBZpYV9jWrZSlxT3mlFLi+HHm0YGxOn1d77OVU4WqO9hfOi1nGd543fRkW9Jkt9OzBzl3SKf1IR97bIlt2/wAIfCX6md5stZwbv6dQDmntu7wh8H+pcts3eEfg/wBR5sp/H26LIyaCO0bn3r3Ii1XaWxcJ2SUWsPcfZv7UeKI8+T8favSjpto9Cn2tm9Z3VV4lN+vdFep470k60dbq24UP5LX7Nb+e1/FPn8MHbXdWGzptylVY2+b7a3j68SSvqu2elhQsXpbMeaI8OniVzS+ddJtvuzmUvUx3tSMeFcN3z7z3J9U2zXxddr8+2sywuqfZn7mx/wB7YT5YjxV4HZtCb5t/Egd7Z9Df6qtl/uJ/+W39SkuqjZb/AODNeltv6jy5PFXzz2jLu1Z71Pqd2c+XbryVrf4ox7OprQ91moj/ADQl+MSfLlHi08Uo2lbDgpcPB/OT9zMvT6+mTxbX2b9qDaXrg9Yl1K6Xu1N691T/ACMezqSq+rrLV611v8MDy5PFpwGmpy97S3ptd2d2SOg0PTHaOmXz/wBrFd1i3v8AFzNy+pFd2tln/tL8mbDQdVd9fB7Qcl4OrP4yIu8X2TG56U2V1n6aeFqK50vxj8+P6nb7J2tRes6e6NnlGXFeseZy1nVbVP6d3vjWov8AExY9T9cZKVetuqfc4xgmvRmdmP1Wud7nudvR+3sXKT9/Exdo3aicHGu50P24QhKX+LKMPYuw9RQlGeus1MV3XV15+0uJt5Vmfys9VpJm+48p2/0C1V8sz1873/z4yl8FF4XwOJ1/Rj5Pd2ep1Na4Zcad6yaXnHGI+89z1uxO0nKTvujlY3YT3IpPwSXlz5mt0/QfRQabqdjWcO2dlvN5+s/EtOaz3VdcMv8A1nTzCnS7HUMSp1t0u+UbIQWfHH9DM6N9KrNnXL5K7paZv52n1MoS4d7raS3Zfcet1aCEeEYRivCMUvwK26OL+qvgi35P/h+L/k3GwNvUaypW6eW8uUovhKEvZku5m0ON00eysU4rHHjhJZ9Tr6p7yTXJ8TXj5Jtjy8V46vABoyAAALbJYRcQ38gPnfrj2w5bRnFTklVGMVuSaw+LljHqjo+rquUq3fY3OcowjvS+k1FZ4/E8y6YaqVutvlut9rdJreWVjOI49yR7V0R0nZaamOOO6m/VmXLest+DPem3rp7zIVRJCJIkcN9u9bGvBJCryLlEliXkRathWidVosUSaJLLVX1wRIkUgXmkYW/aiiV3SoZbpCiiVUAmEyKgUA4FcjIPtb2YlWSJlCOkd1FuFVAkZcOon5ItwpKJMUkhZEdocFk4ErRRoovKx5RI3AnmR5K1rKs3EUlWSAdJ7rDtpM/YtvzXB81y9CKxcDGot3LU/Hgy/HfjpHJPnh0QPJNpdd1Vd8qoaOyUYTlCTlZCMnuy3W4xw/DvZ6dsjadepphdTLejJe+L74yXc0drhZoAAGLrK5Srmo8JOMlHPi00jKAHkdezddcqNHqdBGuMHFT1LcLN+uHcscm8LibzST4pdy4Hd3R4HE7R0zqufsyy4/mjHmncdH/HsmmygyQwqreBmVs5encliSwREiSJKmkqJIkZfFksakiVQjIuLxnVQEEWqpkogipApkq2UckQysK9rTPbI3ikmY8by5TyOy56T7xUiiySLHati9MMoy5InpVZIsZJIskRYtEUkWOJIWyKNJUbAkw2SuttfA0G19Yq4ym3hRW834JcTZ6u/CPN+m+3tNKm2iVjlNzjX2cHhuTW896XsrvXfyLYndTrXwz9vPYaON9s72t1StlNceacnL8z0fq66Q/JtSq5v9lc1F+EJ/Vn+T9TgdLZKclGuMpPkoxTl5YSR6T0E6BXSshfrIuquLUo1y+nY1xW8vqx+9+R2OB66AgAAAFs1wNVtLRxsi4y9U/B+JtyG2vIJenFQUoScJ81968UbCmZnbS0KmvBrk/A08cxe7Ln/nkcfJx/H/Tv4uX5e/baRZJExaZGUijSr4svRGkXolnUsZF6ZCi5eRMUsSJlXLBGVaJv0r0OZHZdgrJMjnDKK21aSMLWbQ3U2cXtbp1KuWOwtxnG9hJeuG8neR0UW+PMi1Ox4TazFPHiU6t9uibxPpyuz+ku/huMkn7SaOi0mt3lwM2Oz4JY3VjwwUhoYJ8Fj0I+NLyYqSuxmVCRFGBKkaRz6svpIi5FqKl4yquSxlS1saTFCKTLmuJbIovFrZj3W4RfZZgxq6XbLHKPf5+SElt6jT6zO61W2qbp6bUSpe7KNc3B88ySysI+eKLM8W3ltS3nzUs5UvXJ9c1aaKWMcMYx5Hy90q2G9Jrr6ZxxicpQX1eznJyg15YePcdeMTMce93VfR3RDWV36Oi+EYpzrjv7qisTSxNPHnk3Z4B1ddOY7Pjcrozsqkt5Rrw3GceGUm0sNfgj3TZW0I6imFsE0pLOHjK8njgXUZYAAAAAAAIbqsmp12jzz/8AhvCOytMddpl69OUSceDMyqwzdZoc8jWuLi+Jz74uvuOvj5pr6rL3iSMjFjIkUjFtcslIvTIFIviSysTZGC3Iix2r0uiUUS2TEpkHSVxQ3MFkZF6n4kzpW9m6HwLXJBPgSBdksWCqYF+SikWymUyJTpK2Wtlk7CJ2DSZmr5sxrbsEdtrbwuLJa9G3xlx8hnF16XvWJ9sOTcn4L8TN0diXkSPTnnM+nM4uzehFYnNRj86MnGMmop57+B04xMuXfJd16zVZlHCdb/RqrUaOep+hbp470ZJL58W8dnLyy+D7jWbK6wZbrdlSi8/RUnxXqzF6w+k9mq0r09MYwqnjtpyknKS3liMEuSzjLfoXUeP20WRe5JxWeHBqTfuR9I9Wef7Prymkm1Fv6ySSb9M5+B43snoep3VVO6uqMpx+dGMpNvPBNcODeOOT6E2VoY0U10w+jXFRWebx3vzYGWAAAAAAAAAAKSiYWq0ikZxTAHOX6dx80IS/z3m+tpTNfqNB3rgZ645W2Oa5+qgrmS7y8CDcaeH/AEK5aMNYsbzedJ4yK75iuzzKO/wyUW+LLkyyUzGd/iR9s3y4kdrTFZtcg5mH8owWPVoJ8bNlLiXwZr/la5hatAuGwU/MrvGuerx5+mSRalBXxs1TCtMBahLjngWfKd54gnN+XL3stM2+ldTOfdZrsLIZk+BdRs+cuMuC8EbSnSKPI3zxf1jrm/WWNptNjuMpVE6iVNpOmFtvth3ZXJZNPr9lV3ZdlFUn4zim370jpCm6EPMdqdEISz2f7J926pOL8sNnLaHolqO03W91SksvEmuD54PdnBeA7NeC+AHE7K6voRanbfKzDjJKEVWuDT45bb4peB3BRIqAAAAAAAAAAAAAACjRUARTpTMW3Qey8GeAdtNPZtndu/Fr8jGns67uSf8AMjogUvHmtJy6jk7Nn6nHCpfagiGOydX+7gv7xfodkCPFlb8jbj/7D1b7ql6zn+US5dG9Q+dla9N9/odcB4snn3/XKw6L2990fsyf5k9XRlrnd8If1OjA8Wf4i827+2ij0cj+8n8IovXR6v27PjFfkboE+PP8R5d39tXVsGhPLg5v+OUpfc3g2FdMY8IpL0WCQFulLQAEoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH/2Q==" alt="#">
                <p>Product Name</p>
            </div>
            <p>Price</p>
            <input type="number" value="1" min="0">
            <p>Total Price</p>
        </div>
        <div class="reduction">
            <input type="text" placeholder="Bon de réduction">
            <input type="submit" value="Appliquer" class="submit">
        </div>
        <div class="prices">
            <div class="price">
                <p>SOUS-TOTAL</p>
                <p>Price</p>
            </div>
            <div class="price">
                <p>FRAIS DE PORT</p>
                <p>Price</p>
            </div>
            <div class="price">
                <p>Reduction</p>
                <p>Price</p>
            </div>
            <div class="totalPrice">
                <div class="price">
                    <p>Total</p>
                    <p>Price</p>
                </div>
                <input type="submit" value="Valider le panier">
            </div>
        </div>
    </div>
@endsection

@section('cssSpe')
    <link rel="stylesheet" href="cart.css">
@endsection
