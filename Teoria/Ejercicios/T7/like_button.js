'use strict';

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      liked: false
    };
  }

  render() {
    if (this.state.liked) {
      return 'You liked comment number ' + this.props.commentID;
    }

    return e(
      'button', {
        onClick: () => this.setState({
          liked: true
        })
      },
      'Like'
    );
  }
}
curl -X POST --data '{"kind":"pyspark","conf":{"spark.master":"yarn","spark.yarn.dist.pyFiles":"/tmp/anotadorImagenRest1.py","queue":"colaLivy"}}' -H "Content-Type":"application/json" localhost:8999/sessions
curl -X POST --data  '{"kind":"pyspark","pyFiles":["/tmp/anotadorImagenRest0.py"],"conf":{"spark.master":"yarn","spark.queue":"colaLivy"},"name":"AnotaTensorFlow","executorCores":1,"executorMemory":"512m","driverCores":1,"driverMemory":"512m","queue":"colaLivy"}' -H  'Content-Type':'application/json' localhost:8999/sessions

curl -X POST --data '{"code":"a=\"{"id":"1073160116164210689","media":["http://pbs.twimg.com/media/DuShcAcU8AAKxw3.jpg","http://pbs.twimg.com/media/DuShcAcU8AAKxw3.jpg" 
]}\""}' -H 'Content-Type':'application/json' localhost:8999/sessions/259/statements 
