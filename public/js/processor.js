class AmpexProcessor extends AudioWorkletProcessor {
    process (inputs, outputs, parameters) {
      return true
    }
  }
  
  registerProcessor('ampex-processor', AmpexProcessor)